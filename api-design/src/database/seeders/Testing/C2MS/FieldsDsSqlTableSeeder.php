<?php

namespace Database\Seeders\Testing\C2MS;

use Illuminate\Database\Seeder;

class FieldsDsSqlTableSeeder extends Seeder
{
    public function run(): void
    {
        \DB::table('fields_ds_sql')->truncate();

        \DB::table('fields_ds_sql')->insert(
            $this->provideData()
        );
    }

    protected function provideData(): array
    {
        return [
            [
                'additional_sql' => NULL,
                'col_image' => NULL,
                'col_label' => 'country_title',
                'col_value' => 'id',
                'date_created' => '2020-06-04 17:31:19',
                'field_id' => 75,
                'id' => 10,
                'location_id' => 1,
                'table_name' => 'crm_firms_countries',
            ],

            [
                'additional_sql' => NULL,
                'col_image' => NULL,
                'col_label' => 'state_name',
                'col_value' => 'state_code',
                'date_created' => '2020-06-04 17:31:19',
                'field_id' => 78,
                'id' => 11,
                'location_id' => 1,
                'table_name' => 'view_state_codes',
            ],

            [
                'additional_sql' => NULL,
                'col_image' => NULL,
                'col_label' => 'state_name',
                'col_value' => 'state_code',
                'date_created' => '2020-06-04 17:32:07',
                'field_id' => 92,
                'id' => 12,
                'location_id' => 1,
                'table_name' => 'view_state_codes',
            ],

            [
                'additional_sql' => NULL,
                'col_image' => NULL,
                'col_label' => 'state_name',
                'col_value' => 'state_code',
                'date_created' => '2020-06-04 17:32:07',
                'field_id' => 93,
                'id' => 13,
                'location_id' => 1,
                'table_name' => 'view_state_codes',
            ],

            [
                'additional_sql' => NULL,
                'col_image' => NULL,
                'col_label' => 'country_title',
                'col_value' => 'id',
                'date_created' => '2020-06-04 17:32:07',
                'field_id' => 94,
                'id' => 14,
                'location_id' => 1,
                'table_name' => 'crm_firms_countries',
            ],

            [
                'additional_sql' => NULL,
                'col_image' => NULL,
                'col_label' => 'state_name',
                'col_value' => 'state_code',
                'date_created' => '2020-06-04 17:32:16',
                'field_id' => 115,
                'id' => 15,
                'location_id' => 1,
                'table_name' => 'view_state_codes',
            ],

            [
                'additional_sql' => NULL,
                'col_image' => NULL,
                'col_label' => 'country_title',
                'col_value' => 'id',
                'date_created' => '2020-06-04 17:32:16',
                'field_id' => 116,
                'id' => 16,
                'location_id' => 1,
                'table_name' => 'crm_firms_countries',
            ],
        ];
    }
}
