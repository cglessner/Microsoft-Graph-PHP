<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use TheNetworg\OAuth2\Client\Provider\Azure;

class MSGraphServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('TheNetworg\OAuth2\Client\Provider\Azure', function ($app) {
            return new Azure([
                'clientId'          =>  env('AZURE_CLIENTID'),
                'clientSecret'      =>  env('AZURE_CLIENTSECRET'),
                'redirectUri'       => 'http://localhost:8000/oauth',
                'urlAPI'            => 'https://graph.microsoft.com/beta/',
                'resource'          => 'https://graph.microsoft.com/'
            ]);
        });
    }
}
