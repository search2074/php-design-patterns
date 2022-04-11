<?php

declare(strict_types=1);

namespace Patterns\Structural\Adapter;

interface Notification
{
    public function send(string $title, string $message);
}
