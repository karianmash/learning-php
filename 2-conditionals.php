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