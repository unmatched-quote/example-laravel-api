<?php

namespace Database\Seeders\Testing\C2MS;

use Illuminate\Database\Seeder;

class ProductsStepperStorageTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run(): void
    {
        \DB::table('products_stepper_storage')->truncate();

        \DB::table('products_stepper_storage')->insert(
            $this->provideData()
        );
    }

    protected function provideData(): array
    {
        return [
            [
                'product_identifier' => '6ffaeae7-a678-11ea-b4d4-4a28775f739c',
                'stepper' => <<<EOF
{
    "title": "House & Home",
    "default": "fnol",
    "activatedBy": {
        "name": "c2ms60b4d5928c1de7_15685111",
        "values": {
            "1": {
                "title": "House & Home",
                "product_steps": "houseAndHomeWithNumOfClaims"
            },
            "2": {
                "title": "House & Home",
                "product_steps": "houseAndHome"
            }
        }
    },
    "target_price": "",
    "product_steps": {
        "fnol": [
            {
                "steps": [
                    {
                        "icon": null,
                        "step": 0,
                        "title": "Loss Details",
                        "errors": [],
                        "complete": false,
                        "datasets": [
                            "9079d0d2-bfaf-11eb-92bf-4a28775f739c",
                            "5179d0d2-bflf-11qb-92bf-4a28775f739c",
                            "2079e0d2-bfaf-11eb-92bf-4a28775f73zc"
                        ],
                        "componentName": "01-loss-details"
                    }
                ],
                "title": "Loss Details",
                "errorCount": 0
            },
            {
                "steps": [
                    {
                        "icon": null,
                        "step": 1,
                        "title": "Loss Contacts",
                        "errors": [],
                        "complete": false,
                        "datasets": [
                            "9079d0d2-bflf-11qb-92bf-4a28775f739c",
                            "8079d0d2-bfaf-11eb-92bf-4a28775f73zc",
                            "7079e0d2-bfaf-11eb-92bf-4a28775f73zc"
                        ],
                        "componentName": "02-loss-contacts"
                    }
                ],
                "title": "Loss Contacts",
                "errorCount": 0
            },
            {
                "steps": [
                    {
                        "icon": null,
                        "step": 2,
                        "title": "Upload documents",
                        "errors": [],
                        "complete": false,
                        "datasets": [],
                        "componentName": "03-upload-documents"
                    }
                ],
                "title": "Upload documents",
                "errorCount": 0
            },
            {
                "steps": [
                    {
                        "icon": null,
                        "step": 3,
                        "title": "Confirm FNOL",
                        "errors": [],
                        "complete": false,
                        "datasets": [
                            "c2ms80b0c02b927f89_11799595",
                            "c2ms80b0c02b927f89_11799500",
                            "c2ms99b0c02b927f89_11799500",
                            "c2ms80b0c02b927f89_22799595",
                            "c2ms80b0c02b927f89_33799500"
                        ],
                        "componentName": "04-confirm-fnol"
                    }
                ],
                "title": "Confirm FNOL",
                "errorCount": 0
            }
        ]
    },
    "quoteNetDownActive": false,
    "renderingComponent": "v-jmi-househome-product"
}
EOF,
                'created_at' => now(),
                'updated_at' => now()

            ]
        ];
    }
}
