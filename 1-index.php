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
<!-- Rules for PHP variables: -->
<!-- 1. A variable starts with the $ sign, followed by the name of the variable -->
<!-- 2. A variable name must start with a letter or the underscore character -->
<!-- 3. A variable name cannot start with a number -->
<!-- 4. A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ ) -->
<!-- 5. Variable names are case-sensitive ($age and $AGE are two different variables) -->

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
    public $color;
    public $model;
    // This is a constructor function
    public function __construct($color, $model)
    {
        $this->color = $color;
        $this->model = $model;
    }
    // This is a method
    public function message()
    {
        return "My car is a " . $this->color . " " . $this->model . "!";
    }
}

$myCar = new Car("black", "Volvo");
echo $myCar->message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar->message();
?>

<!-- php var_dump() function returns  -->
<!-- the data type and value: -->
<?php
var_dump($txt); // string(12) "Hello World!"
var_dump($x); // int(5)
var_dump($y); // float(10.5)
var_dump($z); // bool(true)
var_dump($cars); // array(3) { [0]=> string(5) "Volvo" [1]=> string(3) "BMW" [2]=> string(6) "Toyota" }
var_dump($car); // object(Car)#1 (1) { ["model"]=> string(2) "VW" }
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