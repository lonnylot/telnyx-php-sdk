<?php

namespace Lonnylot\Telnyx\Laravel;

use Illuminate\Support\ServiceProvider;
use Lonnylot\Telnyx\V2\Client;

class TelnyxServiceProvider extends ServiceProvider
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

            return $client;
        });
    }
}
