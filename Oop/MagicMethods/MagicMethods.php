<?php

// Magic methods are special methods that are automatically called when certain actions occur.
class MagicClass
{
    private $data = [];

    // Constructor method is called when an object is instantiated from the class.
    public function __construct()
    {
        echo "Constructor called." . PHP_EOL . PHP_EOL;
    }

    // Getter method is called when an attempt is made to access a non-accessible or non-existent property.
    public function __get($property)
    {
        echo "Getting property: $property" . PHP_EOL;
        return isset($this->data[$property]) ? $this->data[$property] : "The property [ $property ] does not exist.";
    }

    // Setter method is called when a value is assigned to a non-accessible or non-existent property.
    public function __set($property, $value)
    {
        echo "Setting property: $property = $value" . PHP_EOL;
        $this->data[$property] = $value;
    }

    // Isset method is called when isset() or empty() is used on a non-accessible or non-existent property.
    public function __isset($property)
    {
        echo "Checking if property is set: $property" . PHP_EOL;
        return isset($this->data[$property]);
    }

    // Unset method is called when unset() is used on a non-accessible or non-existent property.
    public function __unset($property)
    {
        echo "Unsetting property: $property" . PHP_EOL . PHP_EOL;
        unset($this->data[$property]);
    }

    // Method method is called when an attempt is made to invoke a non-accessible or non-existent method.
    public function __call($method, $arguments)
    {
        echo "Calling method: $method" . PHP_EOL;
        if ($method === 'multiply') {
            $result = array_product($arguments);
            echo "Result: $result" . PHP_EOL . PHP_EOL;
            return $result;
        } else {
            echo "The method [ $method ] does not exist." . PHP_EOL . PHP_EOL;
        }
    }

    // To string method is called when an object is treated as a string, such as when using echo or print.
    public function __toString()
    {
        echo "Converting object to string." . PHP_EOL;
        return "This is the MagicClass object." . PHP_EOL . PHP_EOL;
    }

    // Clone method is called when an object is cloned using the clone keyword.
    public function __clone()
    {
        echo "Cloning the MagicClass object." . PHP_EOL . PHP_EOL;
    }

    // Destructor method is called when an object is no longer referenced or explicitly destroyed.
    public function __destruct()
    {
        echo "Destructor called: The object has been destroyed" . PHP_EOL;
    }
}

// Usage:
$obj = new MagicClass();

$obj->name = "John"; // Setter
echo $obj->name . PHP_EOL . PHP_EOL; // Getter

echo isset($obj->name) ? "Property is set." : "Property is not set."; // Isset
echo PHP_EOL . PHP_EOL;

unset($obj->name); // Unset

$obj->multiply(2, 3, 4); // Method call

echo $obj; // To string

// Clone keyword is used to create a copy of an object.
$cloneObj = clone $obj; // Cloning

// Destroy the object (You don't have to do this explicitly.)
// unset($obj); // Destructor