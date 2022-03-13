<?php

namespace VendorName\LaravelPackageSkeleton;

use Illuminate\Support\ServiceProvider;

class LaravelPackageSkeletonServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
//        dd('dfg');
        /*
         * Optional methods to load your package assets
         */
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadRoutesFrom(__DIR__.'/routes/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('laravel-package-skeleton.php'),
            ], 'config');
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
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'laravel-package-skeleton');

        // Register the main class to use with the facade
        $this->app->singleton('laravel-package-skeleton', function () {
            return new LaravelPackageSkeletonFacade;
        });
    }
}
