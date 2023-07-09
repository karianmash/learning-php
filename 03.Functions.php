<!-- Functions in PHP -->
<!-- ----------------------------------------------------------------- -->

<!-- (a) Defining a Function -->
<!-- syntax -->
<?php
// function functionName() {
//   code to be executed;
// }
?>

<!-- function example -->
<?php
function greeting()
{
    echo "Hello World!";
}
?>

<!-- ----------------------------------------------------------------- -->

<!-- (b) Calling a Function -->
<!-- syntax -->
<?php
// functionName();
?>

<!-- function example -->
<?php
// function greeting() {
//     echo "Hello World!";
// }

greeting();
?>

<!-- ----------------------------------------------------------------- -->

<!-- (c) Function Arguments -->
<!-- syntax -->
<?php
// function functionName($arg1, $arg2, $arg3) {
//   code to be executed;
// }
?>

<!-- function example -->
<?php
// function greeting($name) {
//     echo "Hello $name!";
// }

greeting("John");
?>

<!-- ----------------------------------------------------------------- -->

<!-- (d) Default Argument Value -->
<!-- syntax -->
<?php
// function functionName($arg1, $arg2, $arg3 = "default value") {
//   code to be executed;
// }

// function functionName($arg1, $arg2 = "default value", $arg3) {
//   code to be executed;
// }
?>

<!-- function example -->
<?php
// function greeting($name = "John") {
//     echo "Hello $name!";
// }

greeting();
?>

<!-- ----------------------------------------------------------------- -->

<!-- (e) Returning a Value -->
<!-- syntax -->
<?php
// function functionName($arg1, $arg2, $arg3) {
//   return $value;
// }
?>

<!-- function example -->
<?php
function add($x, $y)
{
    $sum = $x + $y;
    return $sum;
}

echo add(5, 10);
?>

<!-- ----------------------------------------------------------------- -->

<!-- (f) Variable Scope -->
<!-- syntax -->
<?php
// function functionName() {
//   $var = "local variable";
// }

// function functionName() {
// global is used to access a global variable from within a function

//   global $var;
//   $var = "local variable";
// }
?>

<!-- function example -->
<?php
$x = 5; // global scope

function myTest()
{
    // using x inside this function will generate an error
    // echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";
?>

<!-- ----------------------------------------------------------------- -->