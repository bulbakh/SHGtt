<?php

namespace App\Http\Controllers;

use App\Models\LoggerFactory;
use Illuminate\Routing\Controller;

class LoggerController extends Controller
{
    private string $message = 'Message for logging';

    public function log(): void
    {
        $type = config('logger.default');
        echo "default type used: {$type}.<br>";
        $this->logTo($type);
    }

    public function logTo(string $type): void
    {
        try {
            LoggerFactory::create($type)->send($this->message);
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
        response('for logging» was sent via email на email@exaple.com');
    }

    public function logToAll(): void
    {
        foreach (LoggerFactory::createAll() as $logger) {
            try {
                $logger->send($this->message);
            } catch (\Exception $e) {
                echo $e->getMessage();
            }
        }
    }
}
