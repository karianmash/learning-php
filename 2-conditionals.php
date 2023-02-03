<!-- Conditional Structures in PHP -->
<!-- ----------------------------------------------------------------- -->

<!-- (a) if Statement -->

<!-- syntax -->
<?php
// if (condition) {
//   code to be executed if condition is true;
// }
?>

<!-- if example -->
<?php
// date function returns the current date and time
$t = date("H");
if ($t < "20") {
    echo "Have a good day!";
}
?>

<!-- ----------------------------------------------------------------- -->

<!-- (b) if...else Statement -->

<!-- syntax -->
<?php
// if (condition) {
//   code to be executed if condition is true;
// } else {
//   code to be executed if condition is false;
// }
?>

<!-- if...else example -->
<?php
// date function returns the current date and time
$t = date("H");
if ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
?>

<!-- ----------------------------------------------------------------- -->

<!-- (c) if...elseif...else Statement -->

<!-- syntax -->
<?php
// if (condition) {
//   code to be executed if condition is true;
// } elseif (condition) {
//   code to be executed if condition is true;
// } else {
//   code to be executed if condition is false;
// }
?>

<!-- if...elseif...else example -->
<?php
// date function returns the current date and time
$t = date("H");
if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
?>

<!-- ----------------------------------------------------------------- -->

<!-- (d) switch Statement -->

<!-- syntax -->
<?php
// switch (n) {
//   case label1:
//     code to be executed if n=label1;
//     break;
//   case label2:
//     code to be executed if n=label2;
//     break;
//   case label3:
//     code to be executed if n=label3;
//     break;
//   ...
//   default:
//     code to be executed if n is different from all labels;
// }
?>

<!-- switch example -->
<?php
$favcolor = "red";

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
?>

<!-- ----------------------------------------------------------------- -->

<!-- (e) while loop -->

<!-- syntax -->
<?php
// while (condition is true) {
//   code to be executed;
// }
?>

<!-- while example -->
<?php
$x = 1;
while ($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
}
?>

<!-- ----------------------------------------------------------------- -->

<!-- (f) do...while loop -->

<!-- syntax -->
<?php
// do {
//   code to be executed;
// } while (condition is true);
?>

<!-- do...while example -->
<?php
$x = 1;

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);
?>

<!-- ----------------------------------------------------------------- -->

<!-- (g) for loop -->

<!-- syntax -->
<?php
// for (init counter; test counter; increment counter) {
//   code to be executed for each iteration;
// }
?>

<!-- for example -->
<?php
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}
?>

<!-- ----------------------------------------------------------------- -->

<!-- (h) foreach loop -->

<!-- syntax -->
<?php
// foreach ($array as $value) {
//   code to be executed;
// }
?>

<!-- foreach example -->
<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
    echo "$value <br>";
}
?>

<!-- ----------------------------------------------------------------- -->

<!-- (i) break Statement -->

<!-- syntax -->
<?php
// break;
?>

<!-- break example -->
<?php
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
        break;
    }
    echo "The number is: $x <br>";
}
?>

<!-- ----------------------------------------------------------------- -->

<!-- (j) continue Statement -->

<!-- syntax -->
<?php
// continue;
?>

<!-- continue example -->
<?php
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
        continue;
    }
    echo "The number is: $x <br>";
}
?>

<!-- ----------------------------------------------------------------- -->

<!-- (k) goto Statement -->

<!-- syntax -->
<?php
// goto label;
// code to be executed;
// label:
?>

<!-- goto example -->
<?php
goto a;
echo "I'm skipping this line <br>";
a:
echo "I'm skipping this line <br>";
?>

<!-- ----------------------------------------------------------------- -->

<!-- (l) exit Statement -->

<!-- syntax -->
<?php
// exit;
?>

<!-- exit example -->
<?php
echo "I'm skipping this line <br>";
exit;
echo "I'm skipping this line <br>";
?>

<!-- ----------------------------------------------------------------- -->

<!-- (m) die Statement -->

<!-- syntax -->
<?php
// die;
?>

<!-- die example -->
<?php
echo "I'm skipping this line <br>";
die;
echo "I'm skipping this line <br>";
?>

<!-- ----------------------------------------------------------------- -->

<!-- (n) include Statement -->

<!-- syntax -->
<?php
// include 'filename';
?>

<!-- include example -->
<?php
// It will generate a warning (but the script will continue to execute)
include 'footer.php';
?>

<!-- ----------------------------------------------------------------- -->

<!-- (o) include_once Statement -->

<!-- syntax -->
<?php
// include_once 'filename';
?>

<!-- include_once example -->
<?php
// It will include the file only once, even if it is called multiple times
include_once 'footer.php';
?>

<!-- ----------------------------------------------------------------- -->

<!-- (p) require Statement -->

<!-- syntax -->
<?php
// require 'filename';
?>

<!-- require example -->
<?php
// It will generate a fatal error (and the script will stop executing)
require 'footer.php';
?>

<!-- ----------------------------------------------------------------- -->

<!-- (q) require_once Statement -->

<!-- syntax -->
<?php
// require_once 'filename';
?>

<!-- require_once example -->
<?php
// It will include the file only once, even if it is called multiple times
require_once 'footer.php';
?>

<!-- ----------------------------------------------------------------- -->

<!-- (r) return Statement -->

<!-- syntax -->
<?php
// return;
?>

<!-- return example -->
<?php
function sum($x, $y)
{
    $z = $x + $y;
    // It will return the value of $z
    return $z;
}
echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);
?>

<!-- ----------------------------------------------------------------- -->

<!-- (s) global Statement -->

<!-- syntax -->
<?php
// global $variable;
?>

<!-- global example -->
<?php
$x = 5;
$y = 10;

function myTest()
{
    // using x inside this function will generate an error because x is not defined inside this function
    // to solve this, we need to declare x as global
    global $x, $y;
    $y = $x + $y;
}

myTest();
echo $y; // outputs 15  
?>

<!-- ----------------------------------------------------------------- -->