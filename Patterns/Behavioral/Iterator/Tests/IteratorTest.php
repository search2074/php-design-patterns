<?php

declare(strict_types=1);

namespace Patterns\Behavioral\Command\Tests;

use PHPUnit\Framework\TestCase;
use Patterns\Behavioral\Iterator\DataIterator;

class IteratorTest extends TestCase
{
    public function test_data_iterator()
    {
        $iterator = new DataIterator();
        $iterator->addItem('first');
        $iterator->addItem('second');
        $iterator->addItem('third');

        foreach ($iterator as $position => $item) {
            echo "position: {$position} item: {$item}\n";
        }

        $this->expectOutputString(
            "position: 0 item: first\n".
            "position: 1 item: second\n".
            "position: 2 item: third\n"
        );
    }
}