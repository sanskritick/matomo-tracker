<?php

namespace Sanskritick\MatomoTracker;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

class MatomoTrackerServiceProvider extends ServiceProvider
{
    /** @var \Illuminate\Http\Request */
    protected $request;

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(Request $request)
    {
        $this->request = $request;

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/matomotracker.php', 'matomotracker');

        // Register the service the package provides.
        $this->app->singleton('matomotracker', function ($app) {
            return new MatomoTracker(
                $this->request,
                Config::get('matomotracker.siteId'),
                Config::get('matomotracker.url'),
                Config::get('matomotracker.tokenAuth')
            );
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['matomotracker'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__ . '/../config/matomotracker.php' => config_path('matomotracker.php'),
        ], 'matomotracker.config');
    }
}
