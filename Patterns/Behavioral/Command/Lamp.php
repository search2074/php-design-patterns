<?php

declare(strict_types=1);

namespace Patterns\Behavioral\Command;

class Lamp
{
    public function turnOn(): void
    {
        echo "Lamp is on";
    }

    public function turnOff(): void
    {
        echo "Lamp is off";
    }
}