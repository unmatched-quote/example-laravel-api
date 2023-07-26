<?php

namespace Database\Seeders\Testing\C2MS;

use Illuminate\Database\Seeder;

class R2msStorageTableSeeder extends Seeder
{
    public function run(): void
    {
        \DB::table('r2ms_storage')->delete();

        \DB::table('r2ms_storage')->insert(
            $this->provideData()
        );
    }

    protected function provideData(): array
    {
        return [
            [
                'category' => 'object',
                'created_at' => NULL,
                'id' => 1,
                'identifier' => '78f56849-f6f1-11ec-bfa1-de8f233d202e',
                'rules' => '{"r2ms": {"options": [{"name": "disabled", "value": true}]}, "behavior": {"locked": {"value": 2391, "fields": [{"name": "c2ms5e2f0825d735d8_06255990", "value": "not_empty"}], "operator": "or"}}}',
                'updated_at' => NULL,
            ],
        ];
    }
}
