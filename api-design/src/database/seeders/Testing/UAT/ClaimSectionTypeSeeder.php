<?php


namespace Database\Seeders\Testing\UAT;

use Illuminate\Database\Seeder;
use App\Models\ClaimsSectionType;

class ClaimSectionTypeSeeder extends Seeder
{
    public function run(): void
    {
        foreach($this->provideData() as $data)
        {
            ClaimsSectionType::create($data);
        }
    }

    protected function provideData(): array
    {
        return [
            [
                'id' => ClaimsSectionType::T_LOSS_ADJUSTER,
                'title' => 'Loss Adjusters',
                'description' => 'To be determined',
                'enabled' => 1,
                'config' => [
                    'component' => 'section-loss-adjuster'
                ]
            ],

            [
                'id' => ClaimsSectionType::T_SUPPLIERS,
                'title' => 'Suppliers',
                'description' => 'To be determined',
                'enabled' => 1,
                'config' => [
                    'component' => 'section-suppliers'
                ]
            ],

            [
                'id' => ClaimsSectionType::T_POLICY_HOLDER,
                'title' => 'Policy Holders',
                'description' => 'To be determined',
                'enabled' => 1,
                'config' => [
                    'component' => 'section-policy-holder'
                ]
            ],
        ];
    }
}
