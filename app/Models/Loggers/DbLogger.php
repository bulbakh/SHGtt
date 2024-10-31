<?php

namespace App\Models\Loggers;

use App\Models\Logger;

class DbLogger extends Logger
{
    protected string $type = 'db';

    public function send(string $message): void
    {
        // Implement the logic to send the message to the database
        echo "«{$message}» was sent via $this->type<br>";
    }
}
