<?php

namespace Database\Seeders\Testing\Claims;

use App\Models\ClaimLog;
use Illuminate\Database\Seeder;
use Database\Factories\ClaimLogFactory;

class ClaimLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        for ($cnt = 1; $cnt < 200; $cnt++) {
            $definition = ClaimLogFactory::mockedDefinition();
            $definition['claim_id'] = 1 + $cnt % 50;
            ClaimLog::create($definition);
        }
    }
}
