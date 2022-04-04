<?php

declare(strict_types=1);

namespace Patterns\Creational\FactoryMethod\Logger;

class FileLogger implements Logger
{
    public function __construct(private string $filePath)
    {
    }

    public function log(string $message)
    {
        file_put_contents($this->filePath, date('Y-m-d H:i:s').": {$message}\n", FILE_APPEND);
    }
}