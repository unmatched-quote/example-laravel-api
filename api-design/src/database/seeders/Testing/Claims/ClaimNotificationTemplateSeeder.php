<?php

namespace Database\Seeders\Testing\Claims;

use App\Models\ClaimStatus;
use Illuminate\Database\Seeder;
use App\Models\ClaimNotificationTemplate;

class ClaimNotificationTemplateSeeder extends Seeder
{
    public function run(): void
    {
        foreach (ClaimStatusSeeder::STATES as $state) {
            $status = ClaimStatus::whereUuid($state['uuid'])->firstOrFail();

            ClaimNotificationTemplate::create(
                [
                    'title' => "Updated to $status->title",
                    'status_id' => $status->id,
                    'type' => 'email',
                    'template' => [
                        'subject' => "Updated to $status->title",
                        'body' => "<p>Updated claim(id): {{  \$claim->id  }} to $status->title</p>"
                    ],
                ]
            );
        }
    }
}
