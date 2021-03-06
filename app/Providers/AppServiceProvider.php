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
        view()->composer('index', function($view){
            $view->with('latest', \App\News::orderBy('id', 'DESC')->limit(3)->get());
        });
        
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('uploadcare', function ($app) {
            return new Uploadcare\Api('', '');
        });

    }
}
