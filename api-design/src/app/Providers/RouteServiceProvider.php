<?php

namespace App\Providers;

use Illuminate\Http\Request;
use App\Http\Middleware\Logger;
use Illuminate\Support\Facades\Route;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    public const HOME = '/home';

/*    /**
     * The controller namespace for the application.
     *
     * When present, controller route declarations will automatically be prefixed with this namespace.
     *
     * @var string|null
     */
    // protected $namespace = 'App\\Http\\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        Route::pattern('id', '[0-9]+');
        Route::pattern('uuid', '[\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}');

        $this->routes(function()
        {
            $this->apiV1Routes();

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));

            Route::middleware('session')
                ->namespace($this->namespace)
                ->group(base_path('routes/api/oauth2.php'));
        });
    }

    protected function apiV1Routes(): void
    {
        $apiV1 = [
            'claims',
            'claims_2_sections',
            'claims_comments',
            'claims_logs',
            'claims_notifications_scheduled_tasks',
            'claims_notifications_templates',
            'claims_notifications_topics',
            'claims_notifications_types',
            'claims_settlements',
            'claims_settlements_2_claims_settlements_recoveries',
            'claims_settlements_2_files',
            'claims_settlements_logs',
            'claims_settlements_notifications_templates',
            'claims_settlements_payments_templates',
            'claims_settlements_recoveries',
            'claims_settlements_recoveries_statuses',
            'claims_settlements_recoveries_types',
            'claims_settlements_statuses',
            'claims_settlements_types',
            'claims_settlements_types_2_notifications_topics',
            'claims_settlements_types_2_workflows',
            'claims_settlements_users_2_notifications',
            'claims_statuses',
            'claims_statuses_2_eavs',
            'claims_types',
            'claims_types_2_default_values',
            'claims_types_2_default_sections',
            'claims_types_2_eavs',
            'claims_types_2_notifications_topics',
            'claims_types_2_workflows',
            'claims_types_2_products',
            'claims_users_2_notifications',
            'claims_users_2_notifications_topics',
            'claims_users_2_subscribed_claims_settlements_statuses',
            'claims_users_2_subscribed_claims_statuses',
            'claims_workflows',
            'crm',
            'eav',
            'info',
            'policies',
            'products'
        ];

        collect($apiV1)->map(
            function (string $file) {
                Route::prefix('api/v1')
                    ->middleware(Logger::class)
                    ->namespace($this->namespace)
                    ->group(base_path(sprintf('routes/api/v1/%s.php', $file)));
            }
        );
    }
}
