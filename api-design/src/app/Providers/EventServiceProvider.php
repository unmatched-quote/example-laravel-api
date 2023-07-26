<?php

namespace App\Providers;

use App\Events\ClaimsRevisionSaved;
use Illuminate\Support\Facades\Event;
use App\Events\ClaimsSettlementSaved;
use App\Listeners\PushClaimNotifications;
use App\Listeners\SendDefaultSNSNotification;
use App\Events\DefaultSNSNotificationProcessed;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        DefaultSNSNotificationProcessed::class => [
            SendDefaultSNSNotification::class
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        Event::listen(
            ClaimsRevisionSaved::class,
            [PushClaimNotifications::class, 'handleClaimsRevisionSaved']
        );

        Event::listen(
            ClaimsSettlementSaved::class,
            [PushClaimNotifications::class, 'handleClaimsSettlementSaved']
        );
    }
}
