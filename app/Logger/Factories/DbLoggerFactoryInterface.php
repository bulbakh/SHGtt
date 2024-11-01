<?php

namespace App\Logger\Factories;

use App\Interfaces\LoggerFactoryInterface;
use App\Interfaces\LoggerInterface;
use App\Logger\Loggers\DbLogger;

class DbLoggerFactoryInterface implements LoggerFactoryInterface
{
    public static function getType(): string
    {
        return 'db';
    }

    public function createLogger(): LoggerInterface
    {
        return new DbLogger;
    }
}
