<?php

namespace Database\Seeders\Testing\ITS;

use App\Models\ClaimType;
use Illuminate\Database\Seeder;
use App\Models\ClaimType2DefaultValue;
use Database\Factories\ClaimType2DefaultValueFactory;

class ClaimTypeSeeder extends Seeder
{
    const PRODUCT_UUID = '2dab7fe4-0b07-4615-ac41-1f3f7f0d0d38';

    const TYPES = [
        [
            'title' => 'Fire',
            'uuid' => '0fddf5ca-c2ee-4d44-a7e1-988698d97c52',
            'amount_deductible_default' => 1,
            'amount_loss_adjusters_fee_default' => 2,
            'amount_reserve_default' => 3
        ],
        [
            'title' => 'Electrical',
            'uuid' => 'f7b7dc49-fc7a-446e-959e-c527d7e63b9f',
            'parent_uuid' => '0fddf5ca-c2ee-4d44-a7e1-988698d97c52',
            'amount_deductible_default' => 4,
            'amount_loss_adjusters_fee_default' => 5,
            'amount_reserve_default' => 6
        ],
        [
            'title' => 'Explosion',
            'uuid' => '7a01ed9d-4950-45dd-9389-81df175c3e78',
            'parent_uuid' => '0fddf5ca-c2ee-4d44-a7e1-988698d97c52',
            'amount_deductible_default' => 7,
            'amount_loss_adjusters_fee_default' => 8,
            'amount_reserve_default' => 9
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $defaultValuesFactory = new ClaimType2DefaultValueFactory();

        foreach (self::TYPES as $type) {
            $typeModel = ClaimType::create($type);

            $defaultValuesDefinition = $defaultValuesFactory->mockedDefinition();

            $defaultValuesDefinition['claim_type_uuid'] = $typeModel->uuid;
            $defaultValuesDefinition['product_uuid'] = self::PRODUCT_UUID;
            $defaultValuesDefinition['section_uuids'] = $defaultValuesFactory->createSectionsForType($typeModel, 3);

            ClaimType2DefaultValue::create($defaultValuesDefinition);
        }
    }
}
