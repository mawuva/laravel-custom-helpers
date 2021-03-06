<?php

namespace Mawuekom\CustomHelpers;

use Illuminate\Support\ServiceProvider;
use Mawuekom\CustomHelpers\CustomHelpers;
use Mawuekom\CustomHelpers\DataHelpers;

class CustomHelpersServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        require __DIR__.'/helpers.php';
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'custom-helpers');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'custom-helpers');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/custom-helpers.php' => config_path('custom-helpers.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/custom-helpers'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/custom-helpers'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/custom-helpers'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/custom-helpers.php', 'custom-helpers');

        // Register the main class to use with the facade
        $this->app->singleton('custom-helpers', function () {
            return new CustomHelpers;
        });

        $this->app->singleton('custom-helpers.data-helpers', function () {
            return new DataHelpers;
        });
    }
}
