<?php

namespace App\Models;
use App\Interfaces\LoggerFactoryInterface;
use InvalidArgumentException;

class LoggerFactoryRegistry
{
    private array $factories = [];

    public function __construct()
    {
        $this->registerFactories();
    }

    private function registerFactories(): void
    {
        $factoryDirectory = __DIR__ . '/Factories/';
        foreach (scandir($factoryDirectory) as $filename) {
            if ($filename === '.' || $filename === '..') {
                continue;
            }
            $factoryClass = 'App\\Models\\Factories\\' . basename($filename, '.php');
            if (class_exists($factoryClass)) {
                $this->addFactory($factoryClass::getType(), new $factoryClass());
            }
        }
    }

    public function addFactory(string $type, LoggerFactoryInterface $factory): void
    {
        $this->factories[$type] = $factory;
    }

    public function getFactory(string $type): ?LoggerFactoryInterface
    {
        return $this->factories[$type] ?? throw new InvalidArgumentException("Invalid logger type «{$type}».");
    }
    /**
     * @return LoggerFactoryInterface[]
     */
    public function getFactories(): ?array
    {
        return $this->factories ?? [];
    }
}
