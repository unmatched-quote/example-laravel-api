<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(
            [
                ClaimStatusSeeder::class,
                ClaimTypeSeeder::class,
                ClaimWorkflowSeeder::class,
                ClaimSeeder::class,
                ClaimCommentSeeder::class,
                ClaimLogSeeder::class,
                ClaimNotificationSeeder::class,
                ClaimNotificationTemplateSeeder::class
            ]
        );
    }
}
