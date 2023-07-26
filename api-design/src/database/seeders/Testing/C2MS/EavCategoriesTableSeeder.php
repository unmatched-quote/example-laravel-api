<?php

namespace Database\Seeders\Testing\C2MS;

use Illuminate\Database\Seeder;

class EavCategoriesTableSeeder extends Seeder
{
    public function run(): void
    {
        \DB::table('eav_categories')->truncate();

        \DB::table('eav_categories')->insert(
            $this->provideData()
        );
    }

    protected function provideData(): array
    {
        return [
            [
                'category_description' => NULL,
                'category_title' => 'Data-Sets',
                'date_created' => 2011,
                'deleted' => 0,
                'id' => 1,
                'location_id' => 1,
            ],

            [
                'category_description' => NULL,
                'category_title' => 'Field Data',
                'date_created' => 2011,
                'deleted' => 0,
                'id' => 2,
                'location_id' => 1,
            ],
        ];
    }
}
