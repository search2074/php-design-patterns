<?php

declare(strict_types=1);

namespace Patterns\Creational\FactoryMethod\Logger;

class StdoutLogger implements Logger
{
    public function log(string $message)
    {
        echo date('Y-m-d H:i:s').": {$message}\n";
    }
}