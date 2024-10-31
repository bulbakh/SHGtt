<?php
namespace App\Models\Loggers;

use App\Models\Logger;

class FileLogger extends Logger
{
    protected string $type = 'file';
    public function send(string $message): void
    {
        // Implement the logic to send the message to the file
        echo "«{$message}» was sent via $this->type<br>";
    }
}
