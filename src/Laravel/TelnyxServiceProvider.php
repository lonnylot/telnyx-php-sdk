<?php

namespace Lonnylot\Telnyx\Laravel;

use Lonnylot\Telnyx\Client;

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
    }

    public function provides()
    {
        return [
            Client::class
        ];
    }
}
