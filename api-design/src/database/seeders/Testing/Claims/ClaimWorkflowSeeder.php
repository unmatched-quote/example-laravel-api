<?php

namespace Database\Seeders\Testing\Claims;

use App\Models\ClaimType;
use Illuminate\Database\Seeder;
use App\Models\ClaimType2Workflow;
use Database\Factories\ClaimWorkflowFactory;

class ClaimWorkflowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {

        $workflowModel = (new ClaimWorkflowFactory())->count(1)->create()->firstOrFail();

        foreach (ClaimTypeSeeder::TYPES as $type) {
            ClaimType2Workflow::updateOrCreate(
                ['type_id' => ClaimType::getIdByUuid($type['uuid'])],
                ['workflow_id' => $workflowModel->id]
            );
        }
    }
}
