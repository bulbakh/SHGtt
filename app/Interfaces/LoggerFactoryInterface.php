<?php

namespace App\Interfaces;

interface LoggerFactoryInterface
{
    public static function getType(): string;

    public function createLogger(): LoggerInterface;
}
