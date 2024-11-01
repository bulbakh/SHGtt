<?php

namespace App\Models\Factories;

use App\Interfaces\LoggerFactoryInterface;
use App\Interfaces\LoggerInterface;
use App\Models\Loggers\FileLogger;

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
