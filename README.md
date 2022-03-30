# PHP Design patterns

## Список паттернов
### [Порождающие (creational)](Patterns/Creational/README.md)
- Абстрактная фабрика (abstract factory)
- Фабричный метод (factory method)
- Прототип (prototype)
- Строитель (builder)
- [Одиночка (singleton)](Patterns/Creational/Singleton/README.md)
### [Структурные (structural)](Patterns/Structural/)
- Адаптер (adapter)
- Мост (bridge)
- Компоновщик (composite)
- [Декоратор (decorator)](Patterns/Structural/Decorator/)
- Фасад (facade)
- Приспособленец (flyweight)
- Прокси (proxy)
### Поведенческие (behavioral)
- Цепочка обязанностей (chain of responsibility)
- Команда (command)
- Интерпретатор (interpreter)
- Интерпретатор (interpreter)
- Посредник (mediator)
- Хранитель (memento)
- Наблюдатель (observer)
- Состояние (state)
- Стратегия (strategy)
- Шаблонный метод (template method)
- Посетитель (visitor)

### Build
> docker-compose up -d --build

### Start
> docker-compose up -d

### Stop
> docker-compose down

### Run tests
> docker-compose exec php-fpm ./vendor/bin/phpunit
