# Паттерн "Одиночка" (singleton)

Паттерн состоит из одного класса. Простейшая реализация:
- конструктор класса приватный - чтобы не было возможности создавать экземпляр класса извне
- экземпляр класса хранится в единственном числе в приватном статическом поле
- доступен метод для доступа к этому объекту
- объект нельзя клонировать

Минусы:
- нарушает принцип единой ответственности (первая S в аббревиатуре [SOLID](./../../../docs/SOLID.md)). Согласно этому принципу на класс будет возложена только одна задача, однако у синглтона их будет минимум две: логика, гарантирующая единственный объект + основное предназначение класса.