<?php

namespace Tests\Integration\Actions\Claims;

use Tests\TestCase;
use App\Models\Claim;
use App\Models\Claim2File;
use Illuminate\Support\Str;
use App\Models\ClaimRevision;
use App\Models\Claim2Section;
use App\Models\Claim2EavInstance;
use Illuminate\Support\Facades\DB;
use Tests\Feature\API\v1\Claims\CreateClaimTest;
use Buckhill\LibEAV\Models\DataTransfer\Object\ObjectMetadata;
use App\Http\Actions\API\v1\Claims\UpdateClaim\UpdateClaimState;
use App\Http\Actions\API\v1\Claims\UpdateClaim\Stages\UploadFiles;
use App\Http\Actions\API\v1\Claims\UpdateClaim\Stages\InheritFiles;
use App\Http\Actions\API\v1\Claims\UpdateClaim\Stages\ReadClaimRecord;
use App\Http\Actions\API\v1\Claims\UpdateClaim\Stages\CollectEAVInput;
use App\Http\Actions\API\v1\Claims\UpdateClaim\Stages\ValidateEAVInput;
use App\Http\Actions\API\v1\Claims\UpdateClaim\Stages\CollectEAVObjects;
use App\Http\Actions\API\v1\Claims\UpdateClaim\Stages\RefreshClaimModel;
use App\Http\Actions\API\v1\Claims\UpdateClaim\Stages\CreateEAVInstances;
use App\Http\Actions\API\v1\Claims\UpdateClaim\Stages\StateTransitionAllowed;
use App\Http\Actions\API\v1\Claims\UpdateClaim\Stages\CreateFinancialSections;
use App\Http\Actions\API\v1\Claims\UpdateClaim\Stages\CollectEAVObjectsFromType;
use App\Http\Actions\API\v1\Claims\UpdateClaim\Stages\CreateClaimRevisionRecord;
use App\Http\Actions\API\v1\Claims\UpdateClaim\Stages\CreateJunctionConnections;
use App\Http\Actions\API\v1\Claims\UpdateClaim\Stages\CollectEAVObjectsFromStatus;
use App\Http\Actions\API\v1\Claims\UpdateClaim\Stages\CollectFilesInPreviousRevision;
use function Buckhill\LibEAV\Functions\detect_version;

class UpdateClaimPipelineTest extends TestCase
{
    public static string $claim_uuid;

    /**
     * @Depends CreateClaimPipelineTest::test_assign_claim_id_to_static_value
     */
    public function test_depending_on_create_test_succeeds(): string
    {
        $claim_uuid = CreateClaimPipelineTest::$claim_uuid;

        $this->assertTrue(is_string($claim_uuid));

        return $claim_uuid;
    }

    /**
     * @depends test_depending_on_create_test_succeeds
     */
    public function test_create_state_object_succeeds(string $claim_uuid): UpdateClaimState
    {
        $input = array_merge($this->providePayload(), ['eav' => $this->getEAVInput()]);
        $files = CreateClaimPipelineTest::$uploaded_files;
        $inheritable = array_map(fn(Claim2File $model) => ['id' => $model->id, 'is_muted' => rand(0, 1)], $files);

        // Adds the files from previous revision and adds 2 new files to be associated with the claim
        $input = array_merge($input, [
            'files' => [
                'inherit' => $inheritable,
                'new' => $input['files']['new']
            ]
        ]);

        $pdo = DB::connection('eav')->getPdo();
        $version = detect_version($pdo);

        $state = new UpdateClaimState(
            $claim_uuid,
            $input,
            $pdo,
            $version
        );

        $this->assertInstanceOf(UpdateClaimState::class, $state);

        return $state;
    }

    /**
     * @depends test_create_state_object_succeeds
     */
    public function test_read_claim_record_stage_succeeds(UpdateClaimState $state): UpdateClaimState
    {
        $stage = new ReadClaimRecord();

        $state = $stage->handle($state);

        $this->assertInstanceOf(Claim::class, $state->getClaim());

        return $state;
    }

    /**
     * @depends test_read_claim_record_stage_succeeds
     */
    public function test_collect_files_in_previous_revision_succeeds(UpdateClaimState $state): UpdateClaimState
    {
        $stage = new CollectFilesInPreviousRevision();

        $state = $stage->handle($state);

        $this->assertIsArray($state->getClaimFileCollection());
        $this->assertNotEmpty($state->getClaimFileCollection());
        $this->assertInstanceOf(Claim2File::class, $state->getClaimFileCollection()[0]);

        return $state;
    }

    /**
     * @depends test_collect_files_in_previous_revision_succeeds
     */
    public function test_state_transition_stage_succeeds(UpdateClaimState $state): UpdateClaimState
    {
        // @todo = complete the test once stage is implemented
        $stage = new StateTransitionAllowed();

        $state = $stage->handle($state);

        $this->assertInstanceOf(UpdateClaimState::class, $state);

        return $state;
    }

    /**
     * @depends test_state_transition_stage_succeeds
     */
    public function test_collect_eav_objects_from_status_stage_succeeds(UpdateClaimState $state): UpdateClaimState
    {
        $stage = new CollectEAVObjectsFromStatus();

        $state = $stage->handle($state);

        $values = $state->getEavObjectIdentifiers();

        $this->assertIsArray($values);
        $this->assertNotEmpty($values);
        $this->assertArrayHasKey('identifier', $values[0]);
        $this->assertArrayHasKey('table', $values[0]);
        $this->assertArrayHasKey('id', $values[0]);

        return $state;
    }

    /**
     * @depends test_collect_eav_objects_from_status_stage_succeeds
     */
    public function test_collect_eav_objects_from_type_succeeds(UpdateClaimState $state): UpdateClaimState
    {
        $stage = new CollectEAVObjectsFromType();

        $state = $stage->handle($state);

        $values = $state->getEavObjectIdentifiers();

        $this->assertIsArray($values);
        $this->assertNotEmpty($values);
        $this->assertArrayHasKey('identifier', $values[1]);
        $this->assertArrayHasKey('table', $values[1]);
        $this->assertArrayHasKey('id', $values[1]);

        return $state;
    }

    /**
     * @depends test_collect_eav_objects_from_type_succeeds
     */
    public function test_collect_eav_objects_stage_succeeds(UpdateClaimState $state): UpdateClaimState
    {
        $stage = new CollectEAVObjects();

        $state = $stage->handle($state);

        $result = $state->getEavObjects();

        $this->assertIsArray($result);
        $this->assertNotEmpty($result);
        $this->assertTrue(sizeof($result) === 3);
        $this->assertIsArray($object = $result[0]);
        $this->assertArrayHasKey('identifier', $object);
        $this->assertArrayHasKey('table', $object);
        $this->assertArrayHasKey('id', $object);
        $this->assertArrayHasKey('metadata', $object);
        $this->assertArrayHasKey('fields', $object);
        $this->assertArrayHasKey('input', $object);
        $this->assertInstanceOf(ObjectMetadata::class, $object['metadata']);

        return $state;
    }

    /**
     * @depends test_collect_eav_objects_stage_succeeds
     */
    public function test_collect_eav_input_stage_succeeds(UpdateClaimState $state): UpdateClaimState
    {
        $stage = new CollectEAVInput();

        $dataset_identifier = '8cfc936d-a678-11ea-b4d4-4a28775f739c';

        $state = $stage->handle($state);

        $result = $state->getEavObjects();

        $this->assertIsArray($result);

        // assert that data for dataset 8cfc936d-a678-11ea-b4d4-4a28775f739c is available
        foreach($result as $object)
        {
            if($object['identifier'] === $dataset_identifier)
            {
                $this->assertIsArray($object['input']['data']);
                $this->assertIsArray($object['input']['multi_data']);
                $this->assertNotEmpty($object['input']['data']);
                $this->assertNotEmpty($object['input']['multi_data']);
            }
        }


        return $state;
    }

    /**
     * @depends test_collect_eav_input_stage_succeeds
     */
    public function test_validate_eav_input_stage_succeeds(UpdateClaimState $state): UpdateClaimState
    {
        $stage = new ValidateEAVInput();

        $state = $stage->handle($state);

        $this->assertInstanceOf(UpdateClaimState::class, $state);

        return $state;
    }

    /**
     * @depends test_validate_eav_input_stage_succeeds
     */
    public function test_create_claim_revision_record_stage_succeeds(UpdateClaimState $state): UpdateClaimState
    {
        $stage = new CreateClaimRevisionRecord();

        $state = $stage->handle($state);

        $this->assertInstanceOf(ClaimRevision::class, $state->getClaimRevision());

        return $state;
    }

    /**
     * @depends test_create_claim_revision_record_stage_succeeds
     */
    public function test_refresh_claim_model_stage_succeeds(UpdateClaimState $state): UpdateClaimState
    {
        $stage = new RefreshClaimModel();

        $state = $stage->handle($state);

        $this->assertInstanceOf(Claim::class, $state->getClaim());
        $this->assertNotNull($state->getClaim()->revision);
        $this->assertTrue($state->getClaim()->revision > 1);

        return $state;
    }

    /**
     * @depends test_refresh_claim_model_stage_succeeds
     */
    public function test_create_eav_instances_stage_succeeds(UpdateClaimState $state): UpdateClaimState
    {
        $stage = new CreateEAVInstances();

        $state = $stage->handle($state);

        $instances = $state->getEAVInstanceInfo();

        $this->assertIsArray($instances);
        $this->assertNotEmpty($instances);

        $expected = [
            'claim_id',
            'revision',
            'instance_id',
            'instance_revision',
            'type_id',
            'status_id'
        ];

        foreach($instances as $instance)
        {
            foreach($expected as $key)
            {
                $this->assertArrayHasKey($key, $instance);
            }
        }

        return $state;
    }

    /**
     * @depends test_create_eav_instances_stage_succeeds
     */
    public function test_create_junction_connections_stage_succeeds(UpdateClaimState $state): UpdateClaimState
    {
        $stage = new CreateJunctionConnections();

        $state = $stage->handle($state);

        $this->assertIsArray($state->getJunctions());
        $this->assertNotEmpty($state->getJunctions());

        foreach($state->getJunctions() as $junction)
        {
            $this->assertInstanceOf(Claim2EavInstance::class, $junction);
        }

        return $state;
    }

    /**
     * @depends test_create_junction_connections_stage_succeeds
     */
    public function test_create_financial_sections_stage_succeeds(UpdateClaimState $state): UpdateClaimState
    {
        $stage = new CreateFinancialSections();

        $state = $stage->handle($state);

        $this->assertIsArray($state->getFinancialCollection());
        $this->assertNotEmpty($state->getFinancialCollection());
        $this->assertInstanceOf(Claim2Section::class, ($section = $state->getFinancialCollection()[0]));

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
        $this->assertArrayHasKey('created_at', $values);
        $this->assertArrayHasKey('updated_at', $values);

        return $state;
    }

    /**
     * @depends test_create_financial_sections_stage_succeeds
     */
    public function test_inherit_files_stage_succeeds(UpdateClaimState $state): UpdateClaimState
    {
        $stage = new InheritFiles();

        $state = $stage->handle($state);

        $this->assertIsArray($state->getCreatedFiles());
        $this->assertNotEmpty($state->getCreatedFiles());
        $this->assertEquals(2, sizeof($state->getCreatedFiles()));

        return $state;
    }

    /**
     * @depends test_inherit_files_stage_succeeds
     */
    public function test_upload_files_stage_succeeds(UpdateClaimState $state): UpdateClaimState
    {
        $stage = new UploadFiles();

        $state = $stage->handle($state);

        $this->assertIsArray($state->getUploadedFiles());
        $this->assertNotEmpty($state->getUploadedFiles());

        foreach($state->getUploadedFiles() as $file)
        {
            $this->assertInstanceOf(Claim2File::class, $file);
        }

        return $state;
    }

    /**
     * @depends test_upload_files_stage_succeeds
     */
    public function test_save_claim_uuid_for_reading_test(UpdateClaimState $state): bool
    {
        static::$claim_uuid = $state->getClaim()->uuid;

        $this->assertTrue(is_string(static::$claim_uuid));
        $this->assertNotEmpty(static::$claim_uuid);

        return true;
    }

    protected function getEAVInput(): array
    {
        return json_decode(\File::get(storage_path('testing/claim/create_claim_pipeline_eav_payload.json')), true);
    }

    protected function providePayload(): array
    {
        return [
            'claim' => [
                'policy_id' => 14,
                'external_ref' => Str::random(32),
                'company_id' => 1,
                'owner_id' => 1,
                'status_id' => 1,
                'type_id' => 1,
                'subtype_id' => 2,
                'handler_company_id' => 3089,
                'handler_user_id' => 0,
                'payee_id' => 0,
                'loss_adjuster_company_id' => 727,
                'loss_adjuster_user_id' => 3093,
                'date_of_loss' => now()->format('Y-m-d H:i:s'),
                'date_adjuster_instructed' => now()->format('Y-m-d H:i:s'),
                'date_claim_concluded' => null,
                'amount_deductible' => 10,
                'amount_loss_adjusters_fee' => 20,
                'amount_reserved' => 30,
                'amount_settlement_paid' => 40,
                'amount_claim_reserved' => 50,
                'amount_claim_final' => 60,
            ],

            'financials' => [
                'amount_deductible' => 140.33,
                'amount_loss_adjusters_fee' => 223.11,
                'amount_reserved' => 1400.99,
                'sections' => [
                    [
                        'section_type_id' => 1,
                        'eoc_id' => 1,
                        'payee_id' => 1,
                        'amount_reserved' => 100.00,
                        'amount_deductible' => 10.00,
                        'apply_surplus_percentage' => 0,
                    ],

                    [
                        'section_type_id' => 2,
                        'eoc_id' => 2,
                        'payee_id' => 1,
                        'amount_reserved' => 200.00,
                        'amount_deductible' => 20.00,
                        'apply_surplus_percentage' => 1,
                    ],
                ],
            ],

            'eav' => [], // merged with the JSON  file

            // Files payload is different when updating the claim because we need to inherit old ones
            'files' => [
                // Array of files to inherit
                'inherit' => [
                    [
                        'id' => '', // claims_api_claims2files.id
                        'is_muted' => 1,
                    ],

                    [
                        'id' => '', // claims_api_claims2files.id
                        'is_muted' => 0,
                    ]
                ],

                // Array of new files
                'new' => [
                    [
                        'file_name' => 'test-file.json',
                        'file_renamed' => 'my_file.json',
                        'file_type' => 'text/json',
                        'file_size' => strlen('{"key": "my-key", "value": "this is value"}'),
                        'contents' => base64_encode('{"key": "my-key", "value": "this is value"}'),
                        'is_muted' => 0
                    ],

                    [
                        'file_name' => 'test-file-two.json',
                        'file_renamed' => 'hello_world.json',
                        'file_type' => 'text/json',
                        'file_size' => strlen('{"key": "my-key", "value": "this is value"}'),
                        'contents' => base64_encode('{"key": "my-key", "value": "this is value"}'),
                        'is_muted' => 0
                    ],
                ]
            ]
        ];
    }
}
