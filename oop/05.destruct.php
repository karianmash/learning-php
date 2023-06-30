<?php

/**
 * - The __destruct() method is called as soon as all references to a particular object are removed 
 * or when the object is explicitly destroyed or in any order in shutdown sequence.
 * 
 * - The __destruct() method is useful for performing clean-up tasks such as deleting temporary files
 * or closing connections, etc.
 * - Note: The destructor method will be called even if script execution is stopped using exit().
 * - Note: Destructor method can not accept any parameters.]
 * 
 * USECASES include:
 * - Closing database connections
 * - Closing file handlers
 * - Freeing up resources (deleting temporary files)
 * - Closing sessions
 * - Closing connections to external services
 * - Closing any other connections
 * - Logging the end of script execution
 * - Sending emails
 * - etc.
 */

class Person
{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
        echo "Object created for ";
    }

    public function __destruct()
    {
        echo "Object destroyed for $this->name\n";
    }
}

$person = new Person('John', 30);
$person->name;
$person->age;

echo $person->name . "\n";

/**
 * The __destruct() method is called as soon as all references to a particular object are removed or 
 * when the object is explicitly destroyed or in any order in shutdown sequence. Or goes out of scope.
 */ 
