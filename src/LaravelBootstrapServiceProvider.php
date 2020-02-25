<?php

namespace Code413\LaravelBootstrap;

use Illuminate\Support\ServiceProvider;

class LaravelBootstrapServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes(
            [
                __DIR__ . '/../views/' => base_path('resources/views/vendor/bs'),
            ],
            'views'
        );

        $this->loadViewsFrom(__DIR__ . '/../views', 'bs');
    }
}   