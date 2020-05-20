<?php

namespace Codeat3\LaravelMindchow;

use Illuminate\Support\ServiceProvider;

class LaravelMindchowServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('laravel-mindchow.php'),
            ], 'mindchow-config');

        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'laravel-mindchow');

        // Register the main class to use with the facade
        $this->app->singleton('laravel-mindchow', function () {
            return new LaravelMindchow;
        });
    }
}
