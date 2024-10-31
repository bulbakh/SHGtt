<?php

namespace App\Models\Factories;

use App\Interfaces\LoggerFactoryInterface;
use App\Interfaces\LoggerInterface;
use App\Models\Loggers\EmailLogger;

class EmailLoggerFactoryInterface implements LoggerFactoryInterface
{
    public static function getType(): string
    {
        return 'email';
    }

    public function createLogger(): LoggerInterface
    {
        return new EmailLogger();
    }
}
