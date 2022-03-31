<?php

declare(strict_types=1);

namespace Patterns\Behavioral\ChainOfResponsibility;

abstract class Account
{
    /**
     * @var ?self Преемник
     */
    protected ?self $successor;

    public function __construct(protected float $balance)
    {
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    /**
     * Установить преемника (следующее звено цепи)
     * @param Account $successor
     * @return void
     */
    public function setSuccessor(Account $successor)
    {
        $this->successor = $successor;
    }

    /**
     * Хватает ли на счету денежных средств
     * @param float $amount
     * @return bool
     */
    public function canPay(float $amount): bool
    {
        return $this->balance >= $amount;
    }

    public function pay(float $amount): void
    {
        if($this->canPay($amount)) {
            $this->balance -= $amount;
            echo sprintf(
                'Успешная оплата %s с аккаунта %s остаток на счете: %s'.PHP_EOL,
                $amount,
                get_called_class(),
                $this->balance,
            );
        }
        elseif($this->successor) {
            echo sprintf('Недостаточно средств на аккаунте %s...'.PHP_EOL, get_called_class());
            $this->successor->pay($amount);
        }
        else {
            throw new \Exception('Ни на одном из аккаунтов нет необходимого количества денег');
        }
    }
}