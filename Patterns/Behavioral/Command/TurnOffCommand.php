<?php

declare(strict_types=1);

namespace Patterns\Behavioral\Command;

class TurnOffCommand implements Command
{
    public function __construct(protected Lamp $lamp)
    {
    }

    public function execute(): void
    {
        $this->lamp->turnOff();
    }
}