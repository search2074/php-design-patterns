<?php

declare(strict_types=1);

namespace Patterns\Behavioral\ChainOfResponsibility\Tests;

use PHPUnit\Framework\TestCase;
use Patterns\Behavioral\ChainOfResponsibility\BankAccount;
use Patterns\Behavioral\ChainOfResponsibility\PaypalAccount;
use Patterns\Behavioral\ChainOfResponsibility\BitcoinAccount;

class ChainOfResponsibilityTest extends TestCase
{
    public function test_can_last_successor_pay()
    {
        $account = new BankAccount(100);
        $paypalAccount = new PaypalAccount(200);
        $bitcoinAccount = new BitcoinAccount(300);

        // для банковского счета выставляем преемником палку
        $account->setSuccessor($paypalAccount);
        // для палки выставляем преемником биткоин счет
        $paypalAccount->setSuccessor($bitcoinAccount);

        // должно списаться только с самого большого счета
        $account->pay(250);

        $this->assertEquals($account->getBalance(), 100);
        $this->assertEquals($paypalAccount->getBalance(), 200);
        $this->assertEquals($bitcoinAccount->getBalance(), 50);
        $this->expectOutputString(
            "Недостаточно средств на аккаунте Patterns\Behavioral\ChainOfResponsibility\BankAccount...\n".
            "Недостаточно средств на аккаунте Patterns\Behavioral\ChainOfResponsibility\PaypalAccount...\n".
            "Успешная оплата 250 с аккаунта Patterns\Behavioral\ChainOfResponsibility\BitcoinAccount".
                " остаток на счете: 50\n"
        );
    }
}