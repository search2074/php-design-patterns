<?php

declare(strict_types=1);

namespace Patterns\Behavioral\Command;

interface Command
{
    public function execute(): void;
}