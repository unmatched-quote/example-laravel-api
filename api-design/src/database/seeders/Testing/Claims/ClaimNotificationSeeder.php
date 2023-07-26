<?php

namespace Database\Seeders\Testing\Claims;

use App\Models\ClaimType;
use App\Models\ClaimStatus;
use Illuminate\Database\Seeder;
use App\Models\ClaimNotificationType;
use App\Models\ClaimNotificationTopic;
use App\Models\ClaimUser2Notification;
use App\Models\ClaimUser2NotificationTopic;
use App\Models\ClaimType2NotificationTopic;
use App\Models\ClaimUser2SubscribedClaimStatus;

class ClaimNotificationSeeder extends Seeder
{
    public function run(): void
    {
        foreach (ClaimStatusSeeder::STATES as $state) {
            ClaimUser2SubscribedClaimStatus::create(
                [
                    'user_id' => 2,
                    'status_id' => ClaimStatus::whereUuid($state['uuid'])->firstOrFail()->id
                ]
            );
        }

        $snsDefaultTopic = ClaimNotificationTopic::create(
            [
                'title' => 'SNS Default topic',
                'driver_logic' => [
                    'type' => 'SNS',
                    'topics' => [
                        'arn:aws:sns:us-east-1:072020386549:Jaime-topic'
                    ]
                ]
            ]
        );

        $sesDefaultTopic = ClaimNotificationTopic::create(
            [
                'title' => 'SES Default topic',
                'driver_logic' => [
                    'type' => 'SES',
                    'topics' => [
                        'ARN:123123:13123:ses:claim:default'
                    ]
                ]
            ]
        );

        $instantType = ClaimNotificationType::create(
            [
                'title' => 'Instant',
                'duration' => [
                    'schedule' => null
                ],
                'is_summarised' => 0
            ]
        );

        $user2SnsTopic = ClaimUser2NotificationTopic::create(
            [
                'topic_id' => $snsDefaultTopic->id,
                'notification_type_id' => $instantType->id
            ]
        );

        $user2SnsTopicDuplicated = ClaimUser2NotificationTopic::create(
            [
                'topic_id' => $snsDefaultTopic->id,
                'notification_type_id' => $instantType->id
            ]
        );

        $user2SesTopic = ClaimUser2NotificationTopic::create(
            [
                'topic_id' => $sesDefaultTopic->id,
                'notification_type_id' => $instantType->id
            ]
        );

        for ($i = 1; $i <= 50; $i++) {
            ClaimUser2Notification::create(
                [
                    'user_id' => 2,
                    'claim_id' => $i,
                    'users2topic_id' => $user2SnsTopic->id
                ]
            );

            ClaimUser2Notification::create(
                [
                    'user_id' => 2,
                    'claim_id' => $i,
                    'users2topic_id' => $user2SnsTopicDuplicated->id
                ]
            );

            ClaimUser2Notification::create(
                [
                    'user_id' => 2,
                    'claim_id' => $i,
                    'users2topic_id' => $user2SesTopic->id
                ]
            );
        }

        $type = ClaimType::whereUuid(ClaimTypeSeeder::TYPES[1]['uuid'])->firstOrFail();
        $subtype = ClaimType::whereUuid(ClaimTypeSeeder::TYPES[2]['uuid'])->firstOrFail();

        ClaimType2NotificationTopic::create(
            [
                'claim_type_id' => $type->id,
                'claim_subtype_id' => $subtype->id,
                'topic_id' => $snsDefaultTopic->id,
                'notification_type_id' => $instantType->id,
            ]
        );
    }
}
