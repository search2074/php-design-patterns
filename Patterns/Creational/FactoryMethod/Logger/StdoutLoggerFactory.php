<?php

declare(strict_types=1);

namespace Patterns\Creational\FactoryMethod\Logger;

class StdoutLoggerFactory implements LoggerFactory
{
    public function createLogger(): Logger
    {
        return new StdoutLogger();
    }
}