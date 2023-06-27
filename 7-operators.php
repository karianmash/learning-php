<?php
// PHP Operators

// 1. Arithmetic Operators  
$x = 10;
$y = 6;
echo $x + $y; // 16
echo $x - $y; // 4
echo $x * $y; // 60
echo $x / $y; // 1.6666666666667
echo $x % $y; // 4

// 2. Assignment Operators
$x = 10;
$y = 6;
$x += $y; // $x = $x + $y
$x -= $y; // $x = $x - $y
$x *= $y; // $x = $x * $y
$x /= $y; // $x = $x / $y
$x %= $y; // $x = $x % $y

// 3. Comparison Operators
$x = 10;
$y = 6;

echo $x == $y; // false
// === is the same as ==
echo $x === $y; // false
// != is the same as <>
echo $x != $y; // true
// <> is the same as !=
echo $x <> $y; // true
echo $x > $y; // true
echo $x < $y; // false
echo $x >= $y; // true
echo $x <= $y; // false

// 4. Increment/Decrement Operators
$x = 10;
echo ++$x; // 11
echo $x++; // 11
echo --$x; // 10
echo $x--; // 10

// 5. Logical Operators
$x = 10;
$y = 6;

// and is the same as &&
// why this answer is 6?
// because the first condition is true, so the second condition is checked
echo $x and $y; // 6
echo $x or $y; // 10
echo $x xor $y; // 10
echo !$x; // false
echo $x && $y; // 6
echo $x || $y; // 10

// 6. String Operators
$txt1 = "Hello";
$txt2 = "World!";
echo $txt1 . $txt2; // HelloWorld!
echo $txt1 .= $txt2; // HelloWorld!

// 7. Array Operators
$x = array("a" => "red", "b" => "green");
$y = array("c" => "blue", "d" => "yellow");
echo $x + $y; // Array ( [a] => red [b] => green [c] => blue [d] => yellow )
echo $x == $y; // false
echo $x === $y; // false
echo $x != $y; // true
echo $x <> $y; // true
echo $x !== $y; // true

// 8. Conditional Assignment Operators
// $x = $y ?? $z;
// if $y is set, $x = $y, otherwise $x = $z
$x = 10;
$y = 6;
$z = 3;
echo $x = $z ?? $y; // 3
// ech $x = $y ?? $/ 6

//  9. Spaceship Operator
//  $x <=> $y
//  Returns 0 if $x = $y
//  Returns 1 if $x > $y
//  Returns -1 if $x < $y 
$x = 10;
$y = 6;
echo $x <=> $y; // 1
echo $x <=> $x; // 0
// cho $y <=> $x -1

//  10. Null Coalescing Operator
$x = 10;
$y = 6;
$z = 3;

echo $x = $z ?? $y; // 3
// cho $x = $y ?; // 6

//  11. Ternary Operator
$x = 10;
$y = 6;
$z = 3;

echo $x = $z ? $y : 5;
// cho $x = $y ?: 2;
// -----------------------------------------------------------------

//  12. Scope Resolution Operator  -->
/**
 * The Scope Resolution Operator (also called Paamayim Nekudotayim) or in simpler terms, the double colon,
 * is a token that allows access to static, constant, and overridden properties or methods of a class.
 * When referencing these items from outside the class definition, use the name of the class.
 * As of PHP 5.3.0, it's possible to reference the class using a variable.
 */
class MyClass
{
    const CONST_VALUE = 'A constant value';
}

$classname = 'MyClass';
echo $classname::CONST_VALUE; // As of PHP 5.3.0
