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

<!-- 8. Conditional Assignment Operators -->
<?php
// $x = $y ?? $z;
// if $y is set, $x = $y, otherwise $x = $z
$x = 10;
$y = 6;
$z = 3;
echo $x = $y ?? $z; // 6
echo $x = $z ?? $y; // 3
?>

<!-- 9. Spaceship Operator -->
<!-- $x <=> $y -->
<!-- Returns 0 if $x = $y -->
<!-- Returns 1 if $x > $y -->
<!-- Returns -1 if $x < $y  -->
<?php
$x = 10;
$y = 6;
echo $x <=> $y; // 1
echo $y <=> $x; // -1
echo $x <=> $x; // 0
?>

// 10. Null Coalescing Operator
// $x = $y ?? $z;
// if $y is set, $x = $y, otherwise $x = $z
<?php
$x = 10;
$y = 6;
$z = 3;
echo $x = $y ?? $z; // 6
echo $x = $z ?? $y; // 3
?>

// 11. Ternary Operator
// $x = $y ? $z;
// if $y is true, $x = $z
<?php
$x = 10;
$y = 6;
$z = 3;
echo $x = $y ? $z : 2;
echo $x = $z ? $y : 5;
?>

<!-- ----------------------------------------------------------------- -->