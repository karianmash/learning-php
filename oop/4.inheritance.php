<?php

class Animal
{
    protected $name;
    protected $age;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }
}

class Dog extends Animal
{
    private $breed;

    public function setBreed($breed)
    {
        $this->breed = $breed;
    }

    public function displayInfo()
    {
        echo "Dog Information:\n";
        echo "Name: " . $this->name . "\n";
        echo "Age: " . $this->age . " years\n";
        echo "Breed: " . $this->breed . "\n";
    }
}

class Cat extends Animal
{
    private $color;

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function displayInfo()
    {
        echo "Cat Information:\n";
        echo "Name: " . $this->name . "\n";
        echo "Age: " . $this->age . " years\n";
        echo "Color: " . $this->color . "\n";
    }
}

// Creating objects and using the classes

$dog = new Dog();
$dog->setName("Buddy");
$dog->setAge(3);
$dog->setBreed("Labrador Retriever");

$cat = new Cat();
$cat->setName("Whiskers");
$cat->setAge(5);
$cat->setColor("Gray");

// Displaying information using the child class methods

$dog->displayInfo() . "\n";
echo "\n";
echo "--------------------------\n";
$cat->displayInfo() . "\n";