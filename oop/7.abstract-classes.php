<?php

/**
 * - Abstract classes are declared with the abstract keyword, and contain abstract methods.
 * - Abstract methods doesn't have a body.
 * - Abstract classes can not be instantiated, and require subclasses to provide implementations 
 * for the abstract methods.
 * - If a class contains at least one abstract method, then the class must be declared abstract.
 * - If a class is declared abstract, it cannot be instantiated.
 * - To use an abstract class, you must inherit it from another class.
 * - Any class that contains an abstract method must be declared abstract.
 */

abstract class Car
{
    public $name;
    public $color;
    public $price;

    public function __construct($name, $color, $price)
    {
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
    }

    abstract public function intro(): string; // Abstract method with an argument
}

class Audi extends Car
{
    public function intro(): string
    {
        return "Choose German quality! I'm an $this->name!\n";
    }
}

class Volvo extends Car
{
    public function intro(): string
    {
        return "Proud to be Swedish! I'm a $this->name!\n";
    }
}

class Citroen extends Car
{
    public function intro(): string
    {
        return "French extravagance! I'm a $this->name!\n";
    }
}

$audi = new audi("Audi", "black", 300000);
echo $audi->intro();

$volvo = new volvo("Volvo", "white", 150000);
echo $volvo->intro();

$citroen = new citroen("Citroen", "red", 200000);
echo $citroen->intro();
