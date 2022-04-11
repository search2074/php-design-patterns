<?php

declare(strict_types=1);

namespace Patterns\Structural\Adapter;

class EmailNotification implements Notification
{
    public function __construct(private string $email)
    {
    }

    public function send(string $title, string $message)
    {
        echo "send email with title {$title} to email {$this->email} that says {$message}";
    }
}
