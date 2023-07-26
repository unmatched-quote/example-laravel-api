<?php

namespace Database\Seeders\Testing\C2MS;

use Illuminate\Database\Seeder;

class FieldsFieldsTableSeeder extends Seeder
{
    public function run(): void
    {
        \DB::table('fields_fields')->truncate();

        \DB::table('fields_fields')->insert(
            $this->provideData()
        );
    }

    protected function provideData(): array
    {
        return [
            [
                'date_created' => '2020-06-04 17:31:19',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 74,
                'identifier' => '6fec7976-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 1,
            ],

            [
                'date_created' => '2020-06-04 17:31:19',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 75,
                'identifier' => '6fecb35c-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 3,
            ],

            [
                'date_created' => '2020-06-04 17:31:19',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 76,
                'identifier' => '6fecde43-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 1,
            ],

            [
                'date_created' => '2020-06-04 17:31:19',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 77,
                'identifier' => '6fecfe01-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'date_created' => '2020-06-04 17:31:19',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 78,
                'identifier' => '6fed81a2-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 3,
            ],

            [
                'date_created' => '2020-06-04 17:31:19',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 79,
                'identifier' => '6feda828-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 4,
            ],

            [
                'date_created' => '2020-06-04 17:31:19',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 80,
                'identifier' => '6fedd11a-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 3,
            ],

            [
                'date_created' => '2020-06-04 17:31:19',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 81,
                'identifier' => '6fedf841-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 1,
            ],

            [
                'date_created' => '2020-06-04 17:31:19',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 82,
                'identifier' => '6fee19d6-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 3,
            ],

            [
                'date_created' => '2020-06-04 17:31:19',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 83,
                'identifier' => '6fee3d7c-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 3,
            ],

            [
                'date_created' => '2020-06-04 17:31:19',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 84,
                'identifier' => '6fee6065-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 1,
            ],

            [
                'date_created' => '2020-06-04 17:31:19',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 85,
                'identifier' => '6fee7d4e-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 5,
            ],

            [
                'date_created' => '2020-06-04 17:31:19',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 86,
                'identifier' => '6fee9e67-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 4,
            ],

            [
                'date_created' => '2020-06-04 17:31:19',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 87,
                'identifier' => '6feec046-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 4,
            ],

            [
                'date_created' => '2020-06-04 17:31:19',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 88,
                'identifier' => '6feee1bd-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 3,
            ],

            [
                'date_created' => '2020-06-04 17:31:19',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 89,
                'identifier' => '6fef1316-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 3,
            ],

            [
                'date_created' => '2020-06-04 17:32:07',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 90,
                'identifier' => '8cf1b0ce-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 1,
            ],

            [
                'date_created' => '2020-06-04 17:32:07',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 91,
                'identifier' => '8cf1edc6-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'date_created' => '2020-06-04 17:32:07',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 92,
                'identifier' => '8cf20cb4-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 3,
            ],

            [
                'date_created' => '2020-06-04 17:32:07',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 93,
                'identifier' => '8cf23191-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 3,
            ],

            [
                'date_created' => '2020-06-04 17:32:07',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 94,
                'identifier' => '8cf2554d-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 3,
            ],

            [
                'date_created' => '2020-06-04 17:32:07',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 95,
                'identifier' => '8cf2d627-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 3,
            ],

            [
                'date_created' => '2020-06-04 17:32:07',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 96,
                'identifier' => '8cf2fc10-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 1,
            ],

            [
                'date_created' => '2020-06-04 17:32:07',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 97,
                'identifier' => '8cf31af2-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 5,
            ],

            [
                'date_created' => '2020-06-04 17:32:07',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 98,
                'identifier' => '8cf347ad-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 4,
            ],

            [
                'date_created' => '2020-06-04 17:32:07',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 99,
                'identifier' => '8cf36a95-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 1,
            ],

            [
                'date_created' => '2020-06-04 17:32:07',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 100,
                'identifier' => '8cf38a56-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 4,
            ],

            [
                'date_created' => '2020-06-04 17:32:07',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 101,
                'identifier' => '8cf3bab5-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 3,
            ],

            [
                'date_created' => '2020-06-04 17:32:07',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 102,
                'identifier' => '8cf3e0ad-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 4,
            ],

            [
                'date_created' => '2020-06-04 17:32:07',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 103,
                'identifier' => '8cf40a97-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 4,
            ],

            [
                'date_created' => '2020-06-04 17:32:07',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 104,
                'identifier' => '8cf4330e-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 3,
            ],

            [
                'date_created' => '2020-06-04 17:32:07',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 105,
                'identifier' => '8cf4592c-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 4,
            ],

            [
                'date_created' => '2020-06-04 17:32:07',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 106,
                'identifier' => '8cf47dcb-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 3,
            ],

            [
                'date_created' => '2020-06-04 17:32:07',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 107,
                'identifier' => '8cf4a0bd-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 4,
            ],

            [
                'date_created' => '2020-06-04 17:32:07',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 108,
                'identifier' => '8cf4c3e7-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 4,
            ],

            [
                'date_created' => '2020-06-04 17:32:07',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 109,
                'identifier' => '8cf4e6d2-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 4,
            ],

            [
                'date_created' => '2020-06-04 17:32:07',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 110,
                'identifier' => '8cf50ca8-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 3,
            ],

            [
                'date_created' => '2020-06-04 17:32:07',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 111,
                'identifier' => '8cf52fae-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 3,
            ],

            [
                'date_created' => '2020-06-04 17:32:16',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 112,
                'identifier' => '91d80319-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 1,
            ],

            [
                'date_created' => '2020-06-04 17:32:16',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 113,
                'identifier' => '91d82e92-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 1,
            ],

            [
                'date_created' => '2020-06-04 17:32:16',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 114,
                'identifier' => '91d8566b-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'date_created' => '2020-06-04 17:32:16',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 115,
                'identifier' => '91d87b39-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 3,
            ],

            [
                'date_created' => '2020-06-04 17:32:16',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 116,
                'identifier' => '91d8a7f3-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 3,
            ],

            [
                'date_created' => '2020-06-04 17:32:16',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 117,
                'identifier' => '91d8d18b-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 4,
            ],

            [
                'date_created' => '2020-06-04 17:32:16',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 118,
                'identifier' => '91d9079e-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 1,
            ],

            [
                'date_created' => '2020-06-04 17:32:16',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 119,
                'identifier' => '91d92da4-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 4,
            ],

            [
                'date_created' => '2020-06-04 17:32:16',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 120,
                'identifier' => '91d95bd3-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 5,
            ],

            [
                'date_created' => '2020-06-04 17:32:16',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 121,
                'identifier' => '91d98d92-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 5,
            ],

            [
                'date_created' => '2020-06-04 17:32:16',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 122,
                'identifier' => '91d9bb15-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 3,
            ],

            [
                'date_created' => '2020-06-04 17:32:16',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 123,
                'identifier' => '91d9e9e0-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 5,
            ],

            [
                'date_created' => '2020-06-04 17:32:16',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 124,
                'identifier' => '91da1414-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 4,
            ],

            [
                'date_created' => '2020-06-04 17:32:16',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 125,
                'identifier' => '91da4027-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 4,
            ],

            [
                'date_created' => '2020-06-04 17:32:16',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 126,
                'identifier' => '91da6c6f-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 4,
            ],

            [
                'date_created' => '2020-06-04 17:32:16',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 127,
                'identifier' => '91da99be-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 3,
            ],

            [
                'date_created' => '2020-06-04 17:32:16',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 128,
                'identifier' => '91daca69-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 3,
            ],

            [
                'date_created' => '2020-06-04 17:32:16',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 129,
                'identifier' => '91daf24c-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 5,
            ],

            [
                'date_created' => '2020-06-04 17:32:16',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 130,
                'identifier' => '91db1a4a-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 3,
            ],

            [
                'date_created' => '2020-09-11 11:09:24',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 131,
                'identifier' => '4060ddec-f41f-11ea-ae0d-0ace2615376e',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 4,
            ],

            [
                'date_created' => '2020-10-21 10:11:06',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 132,
                'identifier' => 'bbccfaaa-1385-11eb-ae0d-0ace2615376e',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 3,
            ],

            [
                'date_created' => '2020-12-01 09:19:46',
                'date_deleted' => NULL,
                'deleted' => 1,
                'id' => 133,
                'identifier' => '5ab1ccfb-33b6-11eb-9727-0a8fd383ea9a',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 5,
            ],

            [
                'date_created' => '2021-04-09 08:11:48',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 134,
                'identifier' => '3b949310-990b-11eb-83c8-0a8fd383ea9a',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 5,
            ],

            [
                'date_created' => '2021-04-09 09:05:07',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 135,
                'identifier' => 'adfb560a-9912-11eb-83c8-0a8fd383ea9a',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 5,
            ],

            [
                'date_created' => '2021-04-09 09:08:53',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 136,
                'identifier' => '3496126a-9913-11eb-83c8-0a8fd383ea9a',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 5,
            ],

            [
                'date_created' => '2021-04-09 09:09:51',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 137,
                'identifier' => '57a363f2-9913-11eb-83c8-0a8fd383ea9a',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 5,
            ],

            [
                'date_created' => '2021-04-09 09:10:33',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 138,
                'identifier' => '708b9e09-9913-11eb-83c8-0a8fd383ea9a',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 5,
            ],

            [
                'date_created' => '2021-04-09 09:11:23',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 139,
                'identifier' => '8e25d4f3-9913-11eb-83c8-0a8fd383ea9a',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 5,
            ],

            [
                'date_created' => '2021-04-09 09:11:57',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 140,
                'identifier' => 'a26d721c-9913-11eb-83c8-0a8fd383ea9a',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 5,
            ],

            [
                'date_created' => '2021-09-15 12:56:14',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 141,
                'identifier' => '4f1239fa-1624-11ec-8146-0223a3b30884',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 4,
            ],

            [
                'date_created' => '2021-09-15 12:58:23',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 142,
                'identifier' => '9be25261-1624-11ec-8146-0223a3b30884',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 4,
            ],

            [
                'date_created' => '2021-09-15 12:58:54',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 143,
                'identifier' => 'ae252e8d-1624-11ec-8146-0223a3b30884',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 4,
            ],

            [
                'date_created' => '2021-09-15 13:12:43',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 144,
                'identifier' => '9c5ff710-1626-11ec-8146-0223a3b30884',
                'location_id' => 1,
                'revision_id' => 3,
                'type_id' => 4,
            ],

            [
                'date_created' => '2021-09-20 10:14:09',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 145,
                'identifier' => '7e8b19f6-19fb-11ec-8146-0223a3b30884',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 4,
            ],

            [
                'date_created' => '2021-12-21 12:11:27',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 146,
                'identifier' => '1fdd34e4-6257-11ec-ac91-0223a3b30884',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 4,
            ],

            [
                'date_created' => '2021-12-21 12:37:58',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 147,
                'identifier' => 'd3e10021-625a-11ec-ac91-0223a3b30884',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 3,
            ],

            [
                'date_created' => '2022-02-14 08:32:28',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 148,
                'identifier' => 'a5259bbb-8d70-11ec-ac91-0223a3b30884',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 9,
            ],

            [
                'date_created' => '2022-06-27 10:13:33',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 149,
                'identifier' => 'ccbf8134-f601-11ec-bfa1-de8f233d202e',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 3,
            ],

            [
                'date_created' => '2022-06-27 10:14:29',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 150,
                'identifier' => 'ee944c63-f601-11ec-bfa1-de8f233d202e',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 3,
            ],

            [
                'date_created' => '2022-06-27 10:16:48',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 151,
                'identifier' => '410815f7-f602-11ec-bfa1-de8f233d202e',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 3,
            ],

            [
                'date_created' => '2022-06-27 10:18:31',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 152,
                'identifier' => '7eb9738f-f602-11ec-bfa1-de8f233d202e',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 5,
            ],

            [
                'date_created' => '2022-06-27 10:53:39',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 153,
                'identifier' => '66c0c005-f607-11ec-bfa1-de8f233d202e',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 3,
            ],

            [
                'date_created' => '2022-06-27 10:55:53',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 154,
                'identifier' => 'b6b35f29-f607-11ec-bfa1-de8f233d202e',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 3,
            ],

            [
                'date_created' => '2022-06-28 13:03:46',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 155,
                'identifier' => 'beb3a374-f6e2-11ec-bfa1-de8f233d202e',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 3,
            ],

            [
                'date_created' => '2022-06-28 14:45:57',
                'date_deleted' => NULL,
                'deleted' => 0,
                'id' => 156,
                'identifier' => '054dc5fb-f6f1-11ec-bfa1-de8f233d202e',
                'location_id' => 1,
                'revision_id' => 1,
                'type_id' => 3,
            ],
        ];
    }
}
