<?php

namespace Guzzle\Providers;


use Guzzle\Guzzle;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class GuzzleServiceProvider extends ServiceProvider
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
        App::bind('guzzlerequest', function(){
            return new Guzzle();
        });
    }
}
