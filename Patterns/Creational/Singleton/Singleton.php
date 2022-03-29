<?php

declare(strict_types=1);

namespace Patterns\Creational\Singleton;

use Exception;

class Singleton
{
    private static ?Singleton $instance = null;

    public static function getInstance(): Singleton
    {
        if(is_null(static::$instance)) {
            static::$instance = new static();
        }
        return static::$instance;
    }

    /**
     * Вызывается в функции serialize()
     * Предполагаемое использование __wakeup() заключается в восстановлении любых соединений с базой данных,
     * которые могли быть потеряны во время операции сериализации и выполнения других операций повторной инициализации
     */
    public function __wakeup()
    {
        throw new Exception("Cannot unserialize singleton");
    }

    private function __construct()
    {
    }

    private function __clone(): void
    {
    }
}