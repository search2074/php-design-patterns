<?php

declare(strict_types=1);

namespace Patterns\Behavioral\Command\Tests;

use PHPUnit\Framework\TestCase;
use Patterns\Behavioral\Command\Lamp;
use Patterns\Behavioral\Command\TurnOnCommand;
use Patterns\Behavioral\Command\TurnOffCommand;

class CommandTest extends TestCase
{
    public function test_turn_on()
    {
        $lamp = new Lamp();
        $command = new TurnOnCommand($lamp);
        $command->execute();
        $this->expectOutputString("Lamp is on");
    }

    public function test_turn_off()
    {
        $lamp = new Lamp();
        $command = new TurnOffCommand($lamp);
        $command->execute();
        $this->expectOutputString("Lamp is off");
    }
}