<?php

namespace Database\Seeders\Testing\Claims;

use App\Models\Claim;
use App\Models\ClaimType;
use Illuminate\Support\Str;
use App\Models\ClaimStatus;
use App\Models\ClaimRevision;
use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;
use Illuminate\Support\Facades\DB;

class ClaimSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::transaction(function()
        {
            $faker = FakerFactory::create();

            $type = ClaimType::whereUuid(ClaimTypeSeeder::TYPES[1]['uuid'])->firstOrFail();
            $subtype = ClaimType::whereUuid(ClaimTypeSeeder::TYPES[2]['uuid'])->firstOrFail();
            $initialStatus = ClaimStatus::whereUuid(ClaimStatusSeeder::STATES[0]['uuid'])->firstOrFail();
            $fnolStatus = ClaimStatus::whereUuid(ClaimStatusSeeder::STATES[1]['uuid'])->firstOrFail();
            $contactedStatus = ClaimStatus::whereUuid(ClaimStatusSeeder::STATES[2]['uuid'])->firstOrFail();
            $assessingStatus = ClaimStatus::whereUuid(ClaimStatusSeeder::STATES[3]['uuid'])->firstOrFail();
            $coverageDeterminedStatus = ClaimStatus::whereUuid(ClaimStatusSeeder::STATES[4]['uuid'])->firstOrFail();
            $adjusting = ClaimStatus::whereUuid(ClaimStatusSeeder::STATES[5]['uuid'])->firstOrFail();
            $closed = ClaimStatus::whereUuid(ClaimStatusSeeder::STATES[6]['uuid'])->firstOrFail();

            $revisionDefinition = (new \Database\Factories\ClaimRevisionFactory)->mockedDefinition();
            $revisionDefinition['type_id'] = $type->id;
            $revisionDefinition['subtype_id'] = $subtype->id;

            for ($cnt = 1; $cnt <= 200; $cnt++) {
                $claim = Claim::factory()->count(1)->create()->firstOrFail();
                $revisionDefinition['claim_id'] = $claim->id;
                $revisionDefinition['status_id'] = $initialStatus->id;
                $revisionDefinition['uuid'] = Str::uuid()->toString();
                ClaimRevision::create($revisionDefinition);

                if (($cnt % 13) === 0) {
                    continue;
                }

                $numOfFnolRevisions = $faker->numberBetween(1, 25);
                $revisionDefinition['status_id'] = $fnolStatus->id;
                for ($fnolRevisionCnt = 1; $fnolRevisionCnt <= $numOfFnolRevisions; $fnolRevisionCnt++) {
                    $revisionDefinition['uuid'] = Str::uuid()->toString();
                    ClaimRevision::create($revisionDefinition);
                }

                if (($cnt % 11) == 0) {
                    continue;
                }

                $revisionDefinition['status_id'] = $contactedStatus->id;
                $revisionDefinition['uuid'] = Str::uuid()->toString();
                ClaimRevision::create($revisionDefinition);

                $revisionDefinition['uuid'] = Str::uuid()->toString();
                ClaimRevision::create($revisionDefinition);

                if (($cnt % 7) == 0) {
                    continue;
                }

                $revisionDefinition['status_id'] = $assessingStatus->id;
                $revisionDefinition['uuid'] = Str::uuid()->toString();
                ClaimRevision::create($revisionDefinition);

                if (($cnt % 5) == 0) {
                    continue;
                }

                $revisionDefinition['status_id'] = $coverageDeterminedStatus->id;
                $revisionDefinition['uuid'] = Str::uuid()->toString();
                ClaimRevision::create($revisionDefinition);

                if (($cnt % 3) == 0) {
                    continue;
                }

                $revisionDefinition['status_id'] = $adjusting->id;
                $revisionDefinition['uuid'] = Str::uuid()->toString();
                ClaimRevision::create($revisionDefinition);

                if (($cnt % 2) == 0) {
                    continue;
                }

                $revisionDefinition['status_id'] = $closed->id;
                $revisionDefinition['uuid'] = Str::uuid()->toString();
                ClaimRevision::create($revisionDefinition);
            }
        });

    }
}
