<?php

namespace Jiannei\LaravelOptions\Providers;

use Illuminate\Support\ServiceProvider;

class LaravelServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../../database/migrations' => database_path('migrations'),
            ], 'migrations');

            $this->commands([
                \Jiannei\LaravelOptions\Console\Commands\OptionSetCommand::class
            ]);
        }
    }
}