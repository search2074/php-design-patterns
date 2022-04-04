<?php

declare(strict_types=1);

namespace Patterns\Creational\FactoryMethod\Logger\Tests;

use Patterns\Creational\FactoryMethod\Logger\FileLogger;
use Patterns\Creational\FactoryMethod\Logger\FileLoggerFactory;
use PHPUnit\Framework\TestCase;
use Patterns\Creational\FactoryMethod\Logger\StdoutLogger;
use Patterns\Creational\FactoryMethod\Logger\StdoutLoggerFactory;

class LoggerFactoryMethodTest extends TestCase
{
    public function test_can_create_stdout_logging()
    {
        $factory = new StdoutLoggerFactory();
        $logger = $factory->createLogger();

        $this->assertInstanceOf(StdoutLogger::class, $logger);
    }

    public function test_can_create_file_logging()
    {
        $factory = new FileLoggerFactory(sys_get_temp_dir());
        $logger = $factory->createLogger();

        $this->assertInstanceOf(FileLogger::class, $logger);
    }
}