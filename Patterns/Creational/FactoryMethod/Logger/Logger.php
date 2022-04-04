<?php

declare(strict_types=1);

namespace Patterns\Creational\FactoryMethod\Logger;

interface Logger
{
    public function log(string $message);
}