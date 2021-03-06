# PHP Design patterns

## Список паттернов
### [Порождающие (creational)](Patterns/Creational/)
- [Абстрактная фабрика (abstract factory)](Patterns/Creational/AbstractFactory)
- [Фабричный метод (factory method)](Patterns/Creational/FactoryMethod)
- Прототип (prototype)
- Строитель (builder)
- [Одиночка (singleton)](Patterns/Creational/Singleton/)
### [Структурные (structural)](Patterns/Structural/)
- [Адаптер (adapter)](Patterns/Structural/Adapter)
- Мост (bridge)
- Компоновщик (composite)
- [Декоратор (decorator)](Patterns/Structural/Decorator/)
- Фасад (facade)
- Приспособленец (flyweight)
- Прокси (proxy)
### [Поведенческие (behavioral)](Patterns/Behavioral/)
- [Цепочка обязанностей (chain of responsibility)](Patterns/Behavioral/ChainOfResponsibility/)
- [Команда (command)](Patterns/Behavioral/Command)
- [Итератор (iterator)](Patterns/Behavioral/Iterator)
- Посредник (mediator)
- Хранитель (memento)
- Наблюдатель (observer)
- Состояние (state)
- Стратегия (strategy)
- Шаблонный метод (template method)
- Посетитель (visitor)

## ООП
- [Класс (class)](./docs/class.md)
- [Абстрактный класс (abstract class)](./docs/abstract_class.md)
- [Интерфейс (interface)](./docs/interface.md)
- [Трейт (trait)](./docs/trait.md)

### Build
> docker-compose up -d --build

### Start
> docker-compose up -d

### Stop
> docker-compose down
 
### Composer install
> docker-compose exec php-fpm composer i

### Run tests
> docker-compose exec php-fpm ./vendor/bin/phpunit
