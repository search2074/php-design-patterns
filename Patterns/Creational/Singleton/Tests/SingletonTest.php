<?php

declare(strict_types=1);

namespace Patterns\Creational\Singleton\Tests;

use PHPUnit\Framework\TestCase;
use Patterns\Creational\Singleton\Singleton;

class SingletonTest extends TestCase
{
    public function testUniqueness()
    {
        $call = Singleton::getInstance();
        $secondCall = Singleton::getInstance();

        $this->assertInstanceOf(Singleton::class, $call);
        // ссылаются на один объект
        $this->assertSame($call, $secondCall);
    }
}