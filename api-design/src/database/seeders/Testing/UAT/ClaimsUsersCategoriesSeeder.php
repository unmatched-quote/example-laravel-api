<?php

namespace Database\Seeders\Testing\UAT;

use Illuminate\Database\Seeder;
use App\Models\ClaimUserCategory;

class ClaimsUsersCategoriesSeeder extends Seeder
{
    public function run(): void
    {
        ClaimUserCategory::unguard();

        $data = $this->provideData();

        array_map(fn(array $record) => ClaimUserCategory::create($record), $data);
    }

    protected function provideData(): array
    {
        return [
            [
                'id' => ClaimUserCategory::T_OWNER_ID,
                'type_id' => ClaimUserCategory::T_USER,
                'title' => 'Owner',
                'description' => 'Claim owner user',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'id' => ClaimUserCategory::T_HANDLER_COMPANY_ID,
                'type_id' => ClaimUserCategory::T_COMPANY,
                'title' => 'Claim Handler Company',
                'description' => '',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'id' => ClaimUserCategory::T_HANDLER_USER_ID,
                'type_id' => ClaimUserCategory::T_USER,
                'title' => 'Claim Handler User',
                'description' => '',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'id' => ClaimUserCategory::T_PAYEE_ID,
                'type_id' => ClaimUserCategory::T_USER,
                'title' => 'Payee',
                'description' => '',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'id' => ClaimUserCategory::T_LOSS_ADJUSTER_COMPANY_ID,
                'type_id' => ClaimUserCategory::T_COMPANY,
                'title' => 'Loss Adjuster Company',
                'description' => '',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'id' => ClaimUserCategory::T_LOSS_ADJUSTER_USER,
                'type_id' => ClaimUserCategory::T_USER,
                'title' => 'Loss Adjuster User',
                'description' => '',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];
    }
}
