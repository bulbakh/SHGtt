<?php

namespace App\Models;

use App\Interfaces\LoggerInterface;
use App\Models\Loggers\EmailLogger;
use App\Models\Loggers\DbLogger;
use App\Models\Loggers\FileLogger;
use InvalidArgumentException;

class LoggerFactory
{
    /**
     * @param string $type
     * @return LoggerInterface
     * @throws InvalidArgumentException
     */
    public static function create(string $type): LoggerInterface
    {
        return match ($type) {
            'email' => new EmailLogger(),
            'db' => new DbLogger(),
            'file' => new FileLogger(),
            default => throw new InvalidArgumentException("Invalid logger type «{$type}»."),
        };
    }

    /**
     * @return LoggerInterface[]
     */
    public static function createAll(): array
    {
        return [
            new EmailLogger(),
            new DbLogger(),
            new FileLogger(),
        ];
    }
}
