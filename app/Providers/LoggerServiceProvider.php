<?php

namespace App\Providers;

use App\Logger\LoggerFactoryRegistry;
use Illuminate\Support\ServiceProvider;

class LoggerServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(LoggerFactoryRegistry::class, function () {
            return new LoggerFactoryRegistry;
        });
    }
}
