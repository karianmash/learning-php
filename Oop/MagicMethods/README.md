# Magic Methods

## What are magic methods?

Magic methods are special methods which have double underscores at the beginning and/or end of their names. They are also known as dunders. They are used to create functionality that can't be represented as a normal method.

## Why are they used?

Magic methods are not meant to be invoked directly by you, but the invocation happens internally from the class on a certain action. For example, when you add two numbers using the + operator, internally, the __invoke() method will be called.

## Magic Methods List

| Method | Description |
| --- | --- |
| __construct() | The __construct() method is used to initialize a newly created object. |
| __destruct() | The __destruct() method is called when the object is about to be destroyed. |
| __call() | The __call() method is called when an undefined method is called on an object. |
| __callStatic() | The __callStatic() method is called when an undefined method is called on a class. |
| __get() | The __get() method is called when an undefined property is accessed. |
| __set() | The __set() method is called when an undefined property is set. |
| __isset() | The __isset() method is called when isset() or empty() is called on an undefined property. |
| __unset() | The __unset() method is called when unset() is used on an undefined property. |
| __sleep() | The __sleep() method is called when the object is serialized (converted into a string representation for storage or transportation). |
| __wakeup() | The __wakeup() method is called when the object is unserialized (restored back into an object). |
| __toString() | The __toString() method is called when an object is cast to a string. |
| __invoke() | The __invoke() method is called when an object is called as a function. |
| __set_state() | The __set_state() method is called when var_export() is called on an object. |
| __clone() | The __clone() method is called when an object is cloned. |
| __debugInfo() | The __debugInfo() method is called when var_dump() is called on an object. |

## Example

```php
<?php

class Person
{
    private $name;
    private $age;
    private $city;

    public function __construct($name, $age, $city)
    {
        $this->name = $name;
        $this->age = $age;
        $this->city = $city;
    }

    public function __toString()
    {
        return "My name is {$this->name}, I am {$this->age} years old and I live in {$this->city}.";
    }
}

$person = new Person('John', 30, 'New York');
echo $person;
```

## References

- [PHP Magic Methods](https://www.php.net/manual/en/language.oop5.magic.php)
- [PHP Magic Methods Tutorial](https://www.tutorialrepublic.com/php-tutorial/php-magic-methods.php)
- [PHP Magic Methods](https://www.javatpoint.com/php-magic-methods)
