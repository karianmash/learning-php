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



<!-- (b) Printing in PHP -->
<?php
// The echo statement is used to output data to the browser or command line (It is faster than print)
echo "Hello World!"; // Hello World!

/**
 * Similar to echo, the print statement is used to output data to the browser or command line. 
 * It also displays text or variable values, but it returns a value of 1, allowing it to be used
 * within expressions
 * It is slower than echo
 */
print "Hello World!";

/**
 * The var_dump() function is used to display detailed information about one or more variables.
 * It shows the variable's data type, value, and additional metadata. It is useful for debugging and 
 * introspection
 */
$array = [1, 2, 3];
var_dump($array);

/**
 * The print_r() function is used to display information about a variable in a more human-readable format. 
 * It is commonly used for debugging and displaying complex data structures like arrays and objects
 */
$array = [1, 2, 3];
print_r($array);

/**
 *  The printf() function allows you to format and output text using placeholders and format specifiers. 
 * It is useful for generating formatted output based on specific patterns
 */
$name = "John";
$age = 25;
printf("My name is %s and I am %d years old.", $name, $age);

/**
 * The sprintf() function works similarly to printf(), but instead of outputting directly, it returns the 
 * formatted string. It allows you to store the formatted string in a variable for further manipulation or usage.
 */
$name = "John";
$age = 25;
$message = sprintf("My name is %s and I am %d years old.", $name, $age);
echo $message;

/**
 * The die() function is equivalent to exit() and is primarily used to terminate the execution of the script 
 * and display a message before stopping the script execution.
 */
$name = "John";
if (empty($name)) {
    die("Name is required.");
}
echo "Hello, $name!";

/**
 * The exit() function is used to terminate the execution of the script. It is an alias of die() function.
 */
$name = "John";
if (empty($name)) {
    exit("Name is required.");
}
echo "Hello, $name!";
?>
<!-- ----------------------------------------------------------------- -->



<!-- (c) PHP Variables rules -->
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
<!-- Constants are like variables except that once they are defined they cannot be changed or undefined. -->
<!-- Note: Unlike variables, constants are automatically global across the entire script. -->
<?php
// 1. Case Sensitive
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;

// 2. Case Insensitive
define("GREETING1", "Welcome to W3Schools.com!", true);
// echo greeting1;

// 3. Constants arrays
define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
]);
echo cars[0];
?>
<!-- ----------------------------------------------------------------- -->



<!-- (f) Variable scope -->

<!-- 1. Local Variables -->
<!-- A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function: -->
<?php
function myTest()
{
    $x = 5; // local scope
    echo "<p>Variable x inside function is: $x</p>";
}
myTest();
// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";
?>

<!-- 2. Global Variables -->
<!-- A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function: -->
<?php
$y = 5; // global scope
function myTest1()
{
    // using x inside this function will generate an error
    // echo "<p>Variable x inside function is: $y</p>";
}
myTest1();
echo "<p>Variable x outside function is: $y</p>";
?>

<!-- 3. The global Keyword -->
<!-- The global keyword is used to access a global variable from within a function. -->
<?php
$z = 5;
$w = 10;
function myTest2()
{
    global $z, $w;
    $w = $z + $w;
}
myTest2();
echo $w; // outputs 15
?>

<!-- 4. The static Keyword -->
<!-- Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. -->
<!-- We need it for a further job. -->
<!-- To do this, use the static keyword when you first declare the variable: -->
<?php
function myTest3()
{
    static $x = 0;
    echo $x;
    $x++;
}
myTest3();
myTest3();
myTest3();
?>