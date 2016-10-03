<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Uploadcare;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('uploadcare', function ($app) {
            return new Uploadcare\Api('7ebff2c76f76a8f62225', '2b407e6e96a7f28dd990');
        });
    }
}
