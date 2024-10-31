<?php

namespace App\Models;

use App\Interfaces\LoggerInterface;

abstract class Logger implements LoggerInterface
{
    protected string $type;

    abstract public function send(string $message): void;

    public function sendByLogger(string $message, string $loggerType): void
    {
        LoggerFactory::create($loggerType)->send($message);
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }
}
