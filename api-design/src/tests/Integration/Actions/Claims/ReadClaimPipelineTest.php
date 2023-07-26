<?php

namespace Tests\Integration\Actions\Claims;

use Tests\TestCase;
use App\Models\Claim;
use App\Models\Claim2File;
use App\Models\ClaimRevision;
use App\Models\Claim2Section;
use App\Models\Claim2EavInstance;
use Illuminate\Support\Facades\DB;
use App\Http\Actions\API\v1\Claims\ReadClaim\ReadClaimState;
use App\Http\Actions\API\v1\Claims\ReadClaim\Stages\ReadFiles;
use App\Http\Actions\API\v1\Claims\ReadClaim\Stages\ReadFinancials;
use App\Http\Actions\API\v1\Claims\ReadClaim\Stages\ReadClaimRecord;
use App\Http\Actions\API\v1\Claims\ReadClaim\Stages\ReadEAVInstances;
use App\Http\Actions\API\v1\Claims\ReadClaim\Stages\ReadClaimRevisionRecord;
use App\Http\Actions\API\v1\Claims\ReadClaim\Stages\CollectEAVInstancesFromJunction;

class ReadClaimPipelineTest extends TestCase
{
    /**
     * @Depends UpdateClaimPipelineTest::test_save_claim_uuid_for_reading_test
     */
    public function test_receive_claim_uuid_succeeds(): string
    {
        $claim_uuid = UpdateClaimPipelineTest::$claim_uuid;

        $this->assertNotEmpty($claim_uuid);

        return $claim_uuid;
    }

    /**
     * @depends test_receive_claim_uuid_succeeds
     */
    public function test_create_read_claim_state_object_succeeds(string $claim_uuid): ReadClaimState
    {
        $pdo = DB::connection('eav')->getPdo();

        $state = new ReadClaimState(
            $pdo,
            $claim_uuid
        );

        $this->assertInstanceOf(ReadClaimState::class, $state);
        $this->assertInstanceOf(\PDO::class, $state->pdo);
        $this->assertIsString($state->claimUUID);
        $this->assertEquals($claim_uuid, $state->claimUUID);

        return $state;
    }

    /**
     * @depends test_create_read_claim_state_object_succeeds
     */
    public function test_read_claim_record_succeeds(ReadClaimState $state): ReadClaimState
    {
        $stage = new ReadClaimRecord();

        $state = $stage->handle($state);

        $this->assertInstanceOf(Claim::class, $state->getClaim());
        $this->assertEquals(2, $state->getClaim()->revision);

        return $state;
    }

    /**
     * @depends test_read_claim_record_succeeds
     */
    public function test_read_claim_revision_record_succeeds(ReadClaimState $state): ReadClaimState
    {
        $stage = new ReadClaimRevisionRecord();

        $state = $stage->handle($state);

        $this->assertInstanceOf(ClaimRevision::class, $state->getClaimRevision());
        $this->assertEquals(2, $state->getClaimRevision()->revision);

        return $state;
    }

    /**
     * @depends test_read_claim_revision_record_succeeds
     */
    public function test_collect_eav_instances_from_junction_succeeds(ReadClaimState $state): ReadClaimState
    {
        $stage = new CollectEAVInstancesFromJunction();

        $state = $stage->handle($state);

        $this->assertIsArray($state->getJunction());
        $this->assertNotEmpty($state->getJunction());
        $this->assertInstanceOf(Claim2EavInstance::class, ($junction = $state->getJunction()[0]));
        $this->assertEquals($state->getClaim()->id, $junction->claim_id);
        $this->assertEquals($state->getClaim()->revision, $junction->revision);

        return $state;
    }

    /**
     * @depends test_collect_eav_instances_from_junction_succeeds
     */
    public function test_read_eav_instances_succeeds(ReadClaimState $state): ReadClaimState
    {
        $stage = new ReadEAVInstances();

        $state = $stage->handle($state);

        $this->assertIsArray($state->getEAVInstances());
        $this->assertNotEmpty($state->getEAVInstances());

        return $state;
    }

    /**
     * @depends test_read_eav_instances_succeeds
     */
    public function test_read_files_succeeds(ReadClaimState $state): ReadClaimState
    {
        $stage = new ReadFiles();

        $state = $stage->handle($state);

        $this->assertIsArray($state->getFiles());
        $this->assertNotEmpty($state->getFiles());
        $this->assertInstanceOf(Claim2File::class, ($file = $state->getFiles()[0]));

        $values = $file->toArray();

        $this->assertIsArray($values);
        $this->assertArrayHasKey('is_muted', $values);
        $this->assertArrayHasKey('file_name', $values);
        $this->assertArrayHasKey('file_renamed', $values);
        $this->assertArrayHasKey('file_path', $values);
        $this->assertArrayHasKey('file_type', $values);
        $this->assertArrayHasKey('file_size', $values);
        $this->assertArrayHasKey('created_at', $values);

        return $state;
    }

    /**
     * @depends test_read_files_succeeds
     */
    public function test_read_financials_succeeds(ReadClaimState $state): ReadClaimState
    {
        $stage = new ReadFinancials();

        $state = $stage->handle($state);

        $this->assertIsArray($state->getFinancials());
        $this->assertNotEmpty($state->getFinancials());
        $this->assertInstanceOf(Claim2Section::class, ($section = $state->getFinancials()[0]));

        $values = $section->toArray();

        $this->assertIsArray($values);
        $this->assertArrayHasKey('section_type_id', $values);
        $this->assertArrayHasKey('claim_id', $values);
        $this->assertArrayHasKey('revision_id', $values);
        $this->assertArrayHasKey('eoc_id', $values);
        $this->assertArrayHasKey('payee_id', $values);
        $this->assertArrayHasKey('apply_surplus_percentage', $values);
        $this->assertArrayHasKey('amount_reserved', $values);
        $this->assertArrayHasKey('amount_deductible', $values);
        $this->assertArrayHasKey('amount_loss_adjusters_fee', $values);
        $this->assertArrayHasKey('amount_settlement_paid', $values);

        return $state;
    }
}
