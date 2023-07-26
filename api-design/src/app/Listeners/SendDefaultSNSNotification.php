<?php

namespace App\Listeners;

use Exception;
use App\Domain\NotificationService\SNS;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Events\DefaultSNSNotificationProcessed;

class SendDefaultSNSNotification implements ShouldQueue
{

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  DefaultSNSNotificationProcessed  $event
     * @throws Exception
     */
    public function handle(DefaultSNSNotificationProcessed $event): void
    {
        SNS::pushToSNS($event->subject, $event->message, $event->arnTopics);
    }
}
