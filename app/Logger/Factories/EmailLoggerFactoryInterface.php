<?php

namespace App\Logger\Factories;

use App\Interfaces\LoggerFactoryInterface;
use App\Interfaces\LoggerInterface;
use App\Logger\Loggers\EmailLogger;

class EmailLoggerFactoryInterface implements LoggerFactoryInterface
{
    public static function getType(): string
    {
        return 'email';
    }

    public function createLogger(): LoggerInterface
    {
        return new EmailLogger;
    }
}
