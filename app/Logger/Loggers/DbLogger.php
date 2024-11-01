<?php

namespace App\Logger\Loggers;

use App\Logger\Logger;

class DbLogger extends Logger
{
    protected string $type = 'db';

    public function send(string $message): void
    {
        // Implement the logic to send the message to the database
        echo "«{$message}» was sent via $this->type<br>";
    }
}
