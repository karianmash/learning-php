<!-- PHP arrays -->
<!-- --------------------------------------------------------------------- -->

<!-- Different ways to define arrays -->
<?php
$colors = array("red", "green", "blue", "yellow");
$colors = ["red", "green", "blue", "yellow"];
$colors = array(0 => "red", 1 => "green", 2 => "blue", 3 => "yellow");
$colors = [0 => "red", 1 => "green", 2 => "blue", 3 => "yellow"];
?>

<!-- Accessing array elements -->
<?php
$colors = array("red", "green", "blue", "yellow");
echo $colors[0]; // red
echo $colors[1]; // green
echo $colors[2]; // blue
echo $colors[3]; // yellow
?>

<!-- Associative arrays -->
<!-- They are arrays that use named keys that you assign to them. -->
<?php
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
echo "Peter is " . $age['Peter'] . " years old.";
?>

<!-- Multidimensional arrays -->
<!-- An array containing one or more arrays. -->
<?php
$cars = array(
    array("Volvo", 22, 18),
    array("BMW", 15, 13),
    array("Saab", 5, 2),
    array("Land Rover", 17, 15)
);
echo $cars[0][0] . ": In stock: " . $cars[0][1] . ", sold: " . $cars[0][2] . ".<br>";
echo $cars[1][0] . ": In stock: " . $cars[1][1] . ", sold: " . $cars[1][2] . ".<br>";
echo $cars[2][0] . ": In stock: " . $cars[2][1] . ", sold: " . $cars[2][2] . ".<br>";
echo $cars[3][0] . ": In stock: " . $cars[3][1] . ", sold: " . $cars[3][2] . ".<br>";
?>

<!-- Looping through an indexed array -->
<?php
$colors = array("red", "green", "blue", "yellow");

for ($x = 0; $x < count($colors); $x++) {
    echo $colors[$x];
    echo "<br>";
}
?>

<!-- Looping through an associative array -->
<?php
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

foreach ($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
?>

<!-- Looping through a multidimensional array -->
<?php
$cars = array(
    array("Volvo", 22, 18),
    array("BMW", 15, 13),
    array("Saab", 5, 2),
    array("Land Rover", 17, 15)
);

// Loop through the rows of the array
for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";

    // Loop through the elements of the row
    for ($col = 0; $col < 3; $col++) {
        echo "<li>" . $cars[$row][$col] . "</li>";
    }
    echo "</ul>";
}
?>