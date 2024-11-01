<?php

namespace App\Logger\Loggers;

use App\Logger\Logger;

class EmailLogger extends Logger
{
    protected string $type = 'email';

    public function send(string $message): void
    {
        // Implement the logic to send the message to the email
        echo "«{$message}» was sent via $this->type на ".config('logger.email').'<br>';
    }
}
