<?php

declare(strict_types=1);

namespace Patterns\Structural\Adapter;

class TelegramNotification implements Notification
{
    private $api = 'telegram api';

    public function __construct(private string $chatId)
    {
    }

    public function send(string $title, string $message)
    {
        echo "send telegram message #{$title} to chat {$this->chatId} that says #{$message}";
    }
}
