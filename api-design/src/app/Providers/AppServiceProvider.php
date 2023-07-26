<?php

namespace App\Providers;

use Vault\Client;
use Laminas\Diactoros\Uri;
use Laminas\Diactoros\StreamFactory;
use Laminas\Diactoros\RequestFactory;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Builder;
use AlexTartan\GuzzlePsr18Adapter\Client as Psr18AdapterClient;
use Vault\AuthenticationStrategies\TokenAuthenticationStrategy;
use Vault\AuthenticationStrategies\AppRoleAuthenticationStrategy;
use Vault\AuthenticationStrategies\UserPassAuthenticationStrategy;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //==============================================================================================================
        // Hashicorp Vault Client
        //==============================================================================================================
        $this->app->singleton('vault', function($app)
        {
            $client = new Client(
                new Uri(config('services.vault.uri')),
                new Psr18AdapterClient,
                new RequestFactory(),
                new StreamFactory(),
                \Log::getLogger()
            );

            if(config('services.vault.use_namespace'))
            {
                $client->setNamespace(config('services.vault.namespace'));
            }

            $auth_strategy = config('services.vault.auth_strategy');

            $strategy = match($auth_strategy) {
                // "token" is the default so it's omitted here as 'token' and default is used
                default => new TokenAuthenticationStrategy(config('services.vault.auth_strategies.token.token')),
                'userpass' => new UserPassAuthenticationStrategy(config('services.vault.auth_strategies.userpass.username'), config('services.vault.auth_strategies.userpass.password')),
                'approle' => new AppRoleAuthenticationStrategy(config('services.vault.auth_strategies.approle.id'), config('services.vault.auth_strategies.approle.secret')),
            };

            $authenticated = $client->setAuthenticationStrategy($strategy)->authenticate();

            if(!$authenticated)
            {
                throw new \Exception("Failed authenticating with Vault service");
            }

            return $client;
        });
    }

    public function boot(): void
    {
        // Add the macro for whereLike searches on Eloquent models
        Builder::macro('whereLike', fn(string $attribute, string $search) => $this->orWhere($attribute, 'LIKE', "%{$search}%"));
    }
}
