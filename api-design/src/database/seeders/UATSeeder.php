<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\Testing\ITS\ClaimTypeSeeder;
use Database\Seeders\Testing\ITS\ClaimStatusSeeder;
use Database\Seeders\Testing\ITS\ClaimSectionTypeSeeder;
use Database\Seeders\Testing\ITS\ClaimsUsersCategoriesSeeder;
use Database\Seeders\Testing\ITS\ClaimsLedgerCategoriesSeeder;

class UATSeeder extends Seeder
{
    public function run(): bool
    {
        if ('uat' !== app()->environment()) {
            printf("\nApplication is not in 'its' environment. Environment detected: %s. Aborting.", app()->environment());

            return false;
        }

        // seed Claims data
        $this->seedClaims();

        return true;
    }

    public function seedClaims(): void
    {
        $this->call(
            [
                ClaimTypeSeeder::class,
                ClaimStatusSeeder::class,
                ClaimSectionTypeSeeder::class,
                ClaimsUsersCategoriesSeeder::class,
                ClaimsLedgerCategoriesSeeder::class,
            ]
        );
    }
}

