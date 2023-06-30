<?php

/**
 * Interfaces are defined using the interface keyword, in the same way as a standard class,
 * but without any of the methods having their contents defined.
 * All methods declared in an interface must be public;
 * this is the nature of an interface.
 */

// Interface definition
interface Animal2
{
  public function makeSound();
}

// Class definitions
class Cat implements Animal2
{
  public function makeSound()
  {
    echo "I am a cat and I Meow!\n";
  }
}

class Dog implements Animal2
{
  public function makeSound()
  {
    echo "I am a dog and I Bark!\n";
  }
}

class Mouse implements Animal2
{
  public function makeSound()
  {
    echo "I am a mouse and I Squeak!\n";
  }
}

// Create a list of animals
$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();
$animals = array($cat, $dog, $mouse);

// Tell the animals to make a sound
foreach ($animals as $animal) {
  $animal->makeSound();
}
