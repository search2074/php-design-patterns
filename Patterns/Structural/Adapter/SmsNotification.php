<?php

declare(strict_types=1);

namespace Patterns\Structural\Adapter;

class SmsNotification implements Notification
{
    public function __construct(private int $phone)
    {
    }

    public function send(string $title, string $message)
    {
        echo "send sms message #{$title} to {$this->phone} that says #{$message}";
    }
}