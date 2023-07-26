<?php

namespace Database\Seeders\Testing\C2MS;

use Illuminate\Database\Seeder;

class EavObjectsTableSeeder extends Seeder
{
    public function run(): void
    {
        \DB::table('eav_objects')->truncate();

        \DB::table('eav_objects')->insert(
            $this->provideData()
        );
    }

    protected function provideData(): array
    {
        return [
            [
                'date_created' => '2020-06-04 17:31:19',
                'deleted' => 0,
                'id' => 1,
                'identifier' => '6ff9196c-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'revision_id' => 1,
            ],

            [
                'date_created' => '2020-06-04 17:32:07',
                'deleted' => 0,
                'id' => 2,
                'identifier' => '8cfc936d-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'revision_id' => 1,
            ],

            [
                'date_created' => '2020-06-04 17:32:16',
                'deleted' => 0,
                'id' => 3,
                'identifier' => 'ca973636-c5af-11ec-ac91-0223a3b30884',
                'location_id' => 1,
                'revision_id' => 1,
            ],

            [
                'date_created' => '2021-09-20 12:10:36',
                'deleted' => 0,
                'id' => 4,
                'identifier' => 'c2ea03fd-1a0b-11ec-8146-0223a3b30884',
                'location_id' => 1,
                'revision_id' => 1,
            ],

            [
                'date_created' => '2022-06-27 10:51:34',
                'deleted' => 0,
                'id' => 7,
                'identifier' => '1c4fcc92-f607-11ec-bfa1-de8f233d202e',
                'location_id' => 1,
                'revision_id' => 1,
            ],

            [
                'date_created' => '2022-06-28 14:48:40',
                'deleted' => 0,
                'id' => 8,
                'identifier' => '665813e6-f6f1-11ec-bfa1-de8f233d202e',
                'location_id' => 1,
                'revision_id' => 1,
            ],

            [
                'date_created' => '2022-06-28 14:49:11',
                'deleted' => 0,
                'id' => 9,
                'identifier' => '78f56849-f6f1-11ec-bfa1-de8f233d202e',
                'location_id' => 1,
                'revision_id' => 1,
            ],

            [
                'date_created' => '2022-06-28 14:50:21',
                'deleted' => 0,
                'id' => 10,
                'identifier' => 'a28f6f74-f6f1-11ec-bfa1-de8f233d202e',
                'location_id' => 1,
                'revision_id' => 1,
            ],

            [
                'date_created' => '2022-06-28 14:50:43',
                'deleted' => 0,
                'id' => 11,
                'identifier' => 'af7dc180-f6f1-11ec-bfa1-de8f233d202e',
                'location_id' => 1,
                'revision_id' => 1,
            ],

            [
                'date_created' => '2022-06-28 14:51:41',
                'deleted' => 0,
                'id' => 12,
                'identifier' => 'd25d5793-f6f1-11ec-bfa1-de8f233d202e',
                'location_id' => 1,
                'revision_id' => 1,
            ],
        ];
    }
}
