<?php

namespace Tests\Unit;

use App\Logger\LoggerFactoryRegistry;
use PHPUnit\Framework\TestCase;

class LoggerTest extends TestCase
{
    public function test_set_type(): void
    {
        $factoryRegistry = app(LoggerFactoryRegistry::class);
        $factory = $factoryRegistry->getFactory('file');
        $logger = $factory->createLogger();
        $logger->setType('new');
        $type = $logger->getType();
        $this->assertTrue($type === 'new');
    }
}
