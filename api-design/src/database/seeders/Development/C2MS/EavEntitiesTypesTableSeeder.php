<?php

namespace Database\Seeders\Development\C2MS;

use Illuminate\Database\Seeder;

class EavEntitiesTypesTableSeeder extends Seeder
{
    public function run(): void
    {
        \DB::table('eav_entities_types')->delete();

        \DB::table('eav_entities_types')->insert(
            $this->provideData()
        );
    }

    protected function provideData(): array
    {
        return [
            [
                'deleted' => 0,
                'id' => 1,
                'location_id' => 1,
                'type_descr' => NULL,
                'type_title' => 'Field Component',
            ],

            [
                'deleted' => 0,
                'id' => 2,
                'location_id' => 1,
                'type_descr' => NULL,
                'type_title' => 'Form Component',
            ],

            [
                'deleted' => 0,
                'id' => 3,
                'location_id' => 1,
                'type_descr' => NULL,
                'type_title' => 'Form Component (Multi-Submission)',
            ],
        ];
    }
}
