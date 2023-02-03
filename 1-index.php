<!-- Learning PHP -->
<!-- ----------------------------------------------------------------- -->

<!-- (a) PHP Comments -->
<?php
// This is a single line comment
# This is also a single line comment
/*
This is a multiple lines comment block
that spans over multiple
lines
*/
?>
<!-- ----------------------------------------------------------------- -->

<!-- (b) PHP Echo -->
<?php
echo "Hello World!";
?>
<!-- ----------------------------------------------------------------- -->

<!-- (c) PHP Variables -->
<?php
$txt = "Hello World!";
$x = 5;
$y = 10.5;
?>
<!-- ----------------------------------------------------------------- -->

<!-- (d) PHP Data Types -->
<?php
// 1. String
$txt = "Hello World!";
// 2. Integer
$x = 5;
// 3. Float
$y = 10.5;
// 4. Boolean
$z = true;
// 5. Array
$cars = array("Volvo", "BMW", "Toyota");
// 6. Object
class Car
{
    // Model property
    public $model;

    // Constructor
    function Car()
    {
        $this->model = "VW";
    }
}
// 7. NULL
$z = null;
?>
<!-- ----------------------------------------------------------------- -->

<!-- (e) PHP Constants -->
<?php
// 1. Case Sensitive
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;

// 2. Case Insensitive
define("GREETING1", "Welcome to W3Schools.com!", true);
// echo greeting1;
?>
<!-- ----------------------------------------------------------------- -->

<!-- (f) PHP Operators -->
<?php
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
?>
<!-- ----------------------------------------------------------------- -->