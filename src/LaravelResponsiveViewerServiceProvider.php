<?php

namespace Smontiel\ResponsiveViewer;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class LaravelResponsiveViewerServiceProvider extends ServiceProvider
{
    /**
    * Publishes configuration file.
    *
    * @return  void
    */
    public function boot()
    {
        // Register the package route
        Route::group(['namespace' => 'Smontiel\ResponsiveViewer\Http\Controllers'], function () {
            Route::get('/responsive-viewer', 'HomeController@index');
        });

        // Register the package's publishable resources
        if ($this->app->runningInConsole()) {
            $this->publishes([
                    __DIR__.'/../public' => public_path('vendor/responsive-viewer'),
                ], 'responsive-viewer-assets');
        }

        $this->loadViewsFrom(
            __DIR__.'/../resources/views', 'responsive-viewer'
        );

        //$this->publishes([
        //    __DIR__.'/../config/laravel_log_enhancer.php' => config_path('laravel_log_enhancer.php'),
        //], 'laravel-log-enhancer-config');
    }

    /**
    * Make config publishment optional by merging the config from the package.
    *
    * @return  void
    */
    public function register()
    {
        $this->commands([
            Console\PublishCommand::class,
        ]);

        //$this->mergeConfigFrom(
        //    __DIR__.'/../config/laravel_log_enhancer.php',
        //    'laravel_log_enhancer'
        //);
    }
}
