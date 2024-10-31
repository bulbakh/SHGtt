<?php

namespace App\Models\Factories;

use App\Interfaces\LoggerFactoryInterface;
use App\Interfaces\LoggerInterface;
use App\Models\Loggers\DbLogger;

class DbLoggerFactoryInterface implements LoggerFactoryInterface
{
    public static function getType(): string
    {
        return 'db';
    }

    public function createLogger(): LoggerInterface
    {
        return new DbLogger();
    }
}
