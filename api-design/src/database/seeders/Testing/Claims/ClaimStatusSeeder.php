<?php

namespace Database\Seeders\Testing\Claims;

use App\Models\ClaimStatus;
use Illuminate\Database\Seeder;

class ClaimStatusSeeder extends Seeder
{
    const STATES = [
        [
            "title" => "draft",
            "uuid" => "6ea65f69-e45d-409e-b740-9a18e7060cbd",
        ],
        [
            "title" => "fnol",
            "uuid" => "727abfdd-b726-4dac-a14e-241d9616dc4a"
        ],
        [
            "title" => "contacted",
            "uuid" => "7793ff1a-dac1-4a2e-aef6-e6d3a71c412b"
        ],
        [
            "title" => "assessing",
            "uuid" => "b7cf9e3c-e90b-4112-9e86-4bb3248805e8"
        ],
        [
            "title" => "coverageDetermined",
            "uuid" => "3137f934-b397-4c37-9e21-361187197b31"
        ],
        [
            "title" => "adjusting",
            "uuid" => "179c8997-cedb-4e51-b7c5-1c055496758f"
        ],
        [
            "title" => "closed",
            "uuid" => "31a93151-dce8-40cc-9b11-b36c70330410"
        ]
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        foreach (self::STATES as $state) {
            ClaimStatus::create($state);
        }
    }
}
