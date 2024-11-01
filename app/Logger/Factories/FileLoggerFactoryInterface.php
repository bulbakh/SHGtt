<?php

namespace App\Logger\Factories;

use App\Interfaces\LoggerFactoryInterface;
use App\Interfaces\LoggerInterface;
use App\Logger\Loggers\FileLogger;

class FileLoggerFactoryInterface implements LoggerFactoryInterface
{
    public static function getType(): string
    {
        return 'file';
    }

    public function createLogger(): LoggerInterface
    {
        return new FileLogger;
    }
}
