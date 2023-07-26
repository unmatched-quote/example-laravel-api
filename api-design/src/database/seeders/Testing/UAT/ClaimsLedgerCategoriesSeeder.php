<?php

namespace Database\Seeders\Testing\UAT;

use Illuminate\Database\Seeder;
use App\Models\ClaimLedgerCategory;

class ClaimsLedgerCategoriesSeeder extends Seeder
{
    public function run(): void
    {
        $data = $this->provideData();

        ClaimLedgerCategory::unguard(true);

        // Populate the ClaimLedgerCategory
        array_map(fn(array $record) => ClaimLedgerCategory::create($record), $data);
    }

    protected function provideData(): array
    {
        return [
            [
                'id' => ClaimLedgerCategory::T_REVERSAL_ID,
                'type_id' => ClaimLedgerCategory::T_CREDIT,
                'title' => 'Reversal (credit)',
                'description' => 'Reverses transaction value by crediting',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'id' => ClaimLedgerCategory::T_DEDUCTIBLE_ID,
                'type_id' => ClaimLedgerCategory::T_DEBIT,
                'title' => 'Deductible',
                'description' => '',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'id' => ClaimLedgerCategory::T_LOSS_ADJUSTER_FEE_ID,
                'type_id' => ClaimLedgerCategory::T_DEBIT,
                'title' => 'Loss Adjuster Fee',
                'description' => '',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'id' => ClaimLedgerCategory::T_RESERVED_AMOUNT_ID,
                'type_id' => ClaimLedgerCategory::T_DEBIT,
                'title' => 'Reserved Amount',
                'description' => '',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'id' => ClaimLedgerCategory::T_SETTLEMENT_PAID_ID,
                'type_id' => ClaimLedgerCategory::T_DEBIT,
                'title' => 'Settlement Paid',
                'description' => '',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'id' => ClaimLedgerCategory::T_CLAIM_RESERVED_ID,
                'type_id' => ClaimLedgerCategory::T_DEBIT,
                'title' => 'Claim Reserved Amount',
                'description' => '',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'id' => ClaimLedgerCategory::T_CLAIM_FINAL_ID,
                'type_id' => ClaimLedgerCategory::T_DEBIT,
                'title' => 'Claim Final',
                'description' => '',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];
    }
}
