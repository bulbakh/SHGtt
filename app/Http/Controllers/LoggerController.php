<?php

namespace App\Http\Controllers;

use App\Models\LoggerFactoryRegistry;
use Illuminate\Routing\Controller;

class LoggerController extends Controller
{
    private string $message;
    private LoggerFactoryRegistry $factoryRegistry;

    public function __construct()
    {
        $this->factoryRegistry = app(LoggerFactoryRegistry::class);
        $this->message = 'Message for logging';
    }

    public function log(): void
    {
        $type = config('logger.default');
        echo "default type used: {$type}.<br>";
        $this->logTo($type);
    }

    public function logTo(string $type): void
    {
        try {
            $loggerFactory = $this->factoryRegistry->getFactory($type);
            $logger = $loggerFactory->createLogger();
            $logger->send($this->message);
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    public function logToAll(): void
    {
        foreach ($this->factoryRegistry->getFactoriesTypes() as $type) {
            $this->logTo($type);
        }
    }
}
