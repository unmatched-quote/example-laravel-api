<?php

namespace Database\Seeders\Testing\C2MS;

use Illuminate\Database\Seeder;

class EavEntitiesCategoriesTableSeeder extends Seeder
{
    public function run(): void
    {
        \DB::table('eav_entities_categories')->delete();

        \DB::table('eav_entities_categories')->insert(
            $this->provideData()
        );
    }

    public function provideData(): array
    {
        return [
            [
                'category_description' => NULL,
                'category_title' => 'General Datasets',
                'date_created' => 2011,
                'deleted' => 0,
                'id' => 1,
                'location_id' => 1,
            ],
        ];
    }
}
