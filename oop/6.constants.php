<?php

// Class constants are declared by using the const keyword before the constant name.
// Class constants are case-sensitive. However, it is recommended to name the constants in all uppercase letters.
// Class constants can be accessed using the (scope resolution) operator (::) like static properties.
// Class constants cannot be overridden by child classes.
// Class constants can be useful if you need to define some constant data within a class.
// Class constants are always publicly visible.
// Class constants can be accessed using the class name instead of $this keyword.
// Class constants can not be defined with the var keyword.
// Class constants can not be defined with the const keyword inside a method.
// Class constants can be defined with the const keyword inside a class.
// Class constants can be defined with the const keyword outside a class.
// Class constants can be defined with the const keyword inside a trait.
// Class constants can be defined with the const keyword inside an interface.
// Class constants can be defined with the const keyword inside a namespace.
// Class constants can be defined with the const keyword inside a function.
// Class constants can be defined with the const keyword inside a closure.
// Class constants can be defined with the const keyword inside a class method.

class MathOperations
{
    const PI = 3.14159;
    const EULER = 2.71828;

    public static function calculateAreaOfCircle($radius)
    {
        return self::PI * $radius * $radius;
    }

    public static function calculateExponential($base, $exponent)
    {
        return pow(self::EULER, $base * $exponent);
    }
}

// Accessing class constants
echo "The value of PI is: " . MathOperations::PI . "\n";
echo "The value of Euler's number is: " . MathOperations::EULER . "\n\n";

// Using class constants in calculations
$radius = 5;
$area = MathOperations::calculateAreaOfCircle($radius);
echo "The area of a circle with radius $radius is: $area\n";

$base = 2;
$exponent = 3;
$result = MathOperations::calculateExponential($base, $exponent);
echo "The result of exponentiation is: $result\n";
