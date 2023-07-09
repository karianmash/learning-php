<?php

// Magic methods are special methods that are automatically called when certain actions occur.
class MagicClass
{
    private $data = [];
    private $value = 0;

    // 1. Constructor method is called when an object is instantiated from the class.
    public function __construct()
    {
        echo "Constructor called." . PHP_EOL . PHP_EOL;
    }

    // 2. Getter method is called when an attempt is made to access a non-accessible or non-existent property.
    public function __get($property)
    {
        echo "Getting property: $property" . PHP_EOL;
        return isset($this->data[$property]) ? $this->data[$property] : "The property [ $property ] does not exist.";
    }

    // 3. Setter method is called when an attempt is made to assign a value to a non-accessible or non-existent property.
    public function __set($property, $value)
    {
        echo "Setting property: $property = $value" . PHP_EOL;
        $this->data[$property] = $value;
    }

    // 4. Isset method is called when isset() or empty() is used on a non-accessible or non-existent property.
    public function __isset($property)
    {
        echo "Checking if property is set: $property" . PHP_EOL;
        return isset($this->data[$property]);
    }

    // 5. Unset method is called when unset() is used on a non-accessible or non-existent property.
    public function __unset($property)
    {
        echo "Unsetting property: $property" . PHP_EOL . PHP_EOL;
        unset($this->data[$property]);
    }

    // 6. Call method is called when an attempt is made to invoke a non-accessible or non-existent method.
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

    // 7. Static call method is called when an attempt is made to invoke a non-accessible or non-existent static method.
    public static function __callStatic($name, $arguments)
    {
        echo "Static method '$name' is not defined or not accessible." . PHP_EOL;
        echo " Arguments: " . implode(', ', $arguments) . PHP_EOL . PHP_EOL;
    }

    // 8. To string method is called when an object is treated as a string.
    public function __toString()
    {
        echo "Converting object to string." . PHP_EOL;
        return "This is the MagicClass object." . PHP_EOL . PHP_EOL;
    }

    // 9. Clone method is called when an object is cloned.
    public function __clone()
    {
        echo "Cloning the MagicClass object." . PHP_EOL . PHP_EOL;
    }

    // 10. Invoke method is called when an object is treated as a function.
    public function __invoke($param)
    {
        echo "Invoking the MagicClass object." . PHP_EOL;
        $this->value += $param;

        return "The value is now: $this->value" . PHP_EOL . PHP_EOL;
    }

    // 11. Sleep method is called when an object is serialized (convert an object to a string).
    /**
     * This method allows you to customize the serialization process by specifying which properties should be serialized.
     * The __sleep() method should return an array of the names of the properties that need to be serialized. 
     * Any properties not included in the returned array will be excluded from the serialization process.
     */
    public function __sleep()
    {
        echo "Serializing the MagicClass object." . PHP_EOL . PHP_EOL;
        return ['value'];
    }

    // 12. Wakeup method is called when an object is unserialized (convert a string to an object).
    /**
     * This method allows you to customize the unserialization process by specifying which properties should be unserialized.
     * The __wakeup() method should return an array of the names of the properties that need to be unserialized. 
     * Any properties not included in the returned array will be excluded from the unserialization process.
     */
    public function __wakeup()
    {
        echo "Unserializing the MagicClass object." . PHP_EOL . PHP_EOL;
        $this->value = 0;
    }

    // 14. Debug info method is called when an object is treated for debugging purposes.
    public function __debugInfo()
    {
        echo "Converting object to array." . PHP_EOL . PHP_EOL;
        return [
            'value' => $this->value
        ];
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

MagicClass::staticMethod(1, 2, 3); // Static method call

echo $obj; // To string

// Clone keyword is used to create a copy of an object.
$cloneObj = clone $obj; // Cloning

echo $obj(5); // Invoke

// Serialize keyword is used to convert an object to a string.
$serializedObj = serialize($obj); // Serialize

// Unserialize keyword is used to convert a string to an object.
$unserializedObj = unserialize($serializedObj); // Unserialize

var_dump($unserializedObj); // Debug info (or print_r for a more readable output)

// Destroy the object (You don't have to do this explicitly.)
// unset($obj); // Destructor