<?php

namespace Lonnylot\Telnyx\Laravel;

use Lonnylot\Telnyx\Client;
use Lonnylot\Telnyx\Legacy\Client as LegacyClient;

use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class TelnyxServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('Lonnylot\Telnyx\Client', function($app, $parameters = []) {
            $client = Client::getInstance('telnyx');
            $client->setApiKey(config('services.telnyx.api_key'));
            $client->setValidatorFactory($app['validator']);

            return $client;
        });

        $this->app->singleton('Lonnylot\Telnyx\LegacyClient', function($app, $parameters = []) {
            $client = LegacyClient::getInstance('legacy_telnyx');
            $client->setApiKey(config('services.telnyx.legacy_api_key'));
            $client->setValidatorFactory($app['validator']);
            $client->setAuthHeaders(['x-api-token' => $client->getApiKey()]);

            return $client;
        });
    }

    public function provides()
    {
        return [
            Client::class
        ];
    }
}
