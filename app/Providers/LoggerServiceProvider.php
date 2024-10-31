<?php

namespace App\Providers;
use App\Models\LoggerFactoryRegistry;
use Illuminate\Support\ServiceProvider;

class LoggerServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(LoggerFactoryRegistry::class, function ($app) {
            return new LoggerFactoryRegistry();
        });
    }
}
