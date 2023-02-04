<!-- Built-in Functions -->
<!-- ----------------------------------------------------------------- -->

<!-- (a) PHP Math Functions -->
<!-- syntax -->
<?php
echo min(0, 150, 30, 20, -8, -200); // -200
echo max(0, 150, 30, 20, -8, -200); // 150
echo abs(-6.7); // 6.7
echo sqrt(64); // 8
echo round(0.60); // 1
echo round(0.49); // 0
echo rand(); // 456
echo rand(10, 100); // 44
?>

<!-- ----------------------------------------------------------------- -->

<!-- (b) PHP String Functions -->
<!-- syntax -->
<?php
echo strlen("Hello World!"); // 12
echo str_word_count("Hello World!"); // 2
echo strrev("Hello World!"); // !dlroW olleH
// strpos is used to find the position of the first occurrence of a substring in a string
echo strpos("Hello World!", "World"); // 6
echo str_replace("World", "Dolly", "Hello World!"); // Hello Dolly! 

// str_split is used to split a string into an array
print_r(str_split("Hello"));
?>

<!-- ----------------------------------------------------------------- -->

<!-- (c) PHP Array Functions -->
<!-- syntax -->
<?php
// count is used to count all elements in an array, or something in an object
echo count([1, 2, 3, 4, 5]); // 5
echo count(["a" => "red", "b" => "green", "c" => "blue"]); // 3
// echo count("Hello World!"); // 12
// echo count(10); // 1

// sort is used to sort arrays in ascending order
$numbers = [4, 6, 2, 22, 11];
sort($numbers);
print_r($numbers); // Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 11 [4] => 22 )  

// rsort is used to sort arrays in descending order
$numbers = [4, 6, 2, 22, 11];
rsort($numbers);
print_r($numbers); // Array ( [0] => 22 [1] => 11 [2] => 6 [3] => 4 [4] => 2 )

// asort is used to sort associative arrays in ascending order, according to the value
$age = ["Peter" => "35", "Ben" => "37", "Joe" => "43"];
asort($age);
print_r($age); // Array ( [Peter] => 35 [Ben] => 37 [Joe] => 43 )

// ksort is used to sort associative arrays in ascending order, according to the key
$age = ["Peter" => "35", "Ben" => "37", "Joe" => "43"];
ksort($age);
print_r($age); // Array ( [Ben] => 37 [Joe] => 43 [Peter] => 35 )

// arsort is used to sort associative arrays in descending order, according to the value
$age = ["Peter" => "35", "Ben" => "37", "Joe" => "43"];
arsort($age);
print_r($age); // Array ( [Joe] => 43 [Ben] => 37 [Peter] => 35 )

// krsort is used to sort associative arrays in descending order, according to the key
$age = ["Peter" => "35", "Ben" => "37", "Joe" => "43"];
krsort($age);
print_r($age); // Array ( [Peter] => 35 [Joe] => 43 [Ben] => 37 )

// in_array is used to search an array for a specific value
$numbers = [4, 6, 2, 22, 11];
if (in_array(3, $numbers)) {
    echo "Match found";
} else {
    echo "Match not found";
} // Match not found

// array_merge is used to merge one or more arrays
$array1 = ["color" => "red", 2, 4];
$array2 = ["a", "b", "color" => "green", "shape" => "trapezoid", 4];
$result = array_merge($array1, $array2);
print_r($result); // Array ( [color] => green [0] => 2 [1] => 4 [2] => a [3] => b [shape] => trapezoid [4] => 4 )

// array_search is used to search an array for a specific value and return the key
$numbers = [4, 6, 2, 22, 11];
echo array_search(2, $numbers); // 2
?>

<!-- ----------------------------------------------------------------- -->

<!-- (d) PHP Date/Time Functions -->
<!-- syntax -->
<?php
// date is used to format a local date/time
echo date("Y/m/d"); // 2020/03/01
echo date("Y.m.d"); // 2020.03.01
echo date("Y-m-d"); // 2020-03-01
echo date("l"); // Saturday

// time is used to return the current time in seconds since the Unix Epoch (January 1 1970 00:00:00 GMT)
echo time(); // 1583020800

// mktime is used to get Unix timestamp for a date
$d = mktime(11, 14, 54, 8, 12, 2014); // 1407912094
echo date("Y-m-d h:i:sa", $d); // 2014-08-12 11:14:54am

// strtotime is used to convert a human readable string to a Unix timestamp
$d = strtotime("10:30pm April 15 2014"); // 1397501000
echo date("Y-m-d h:i:sa", $d); // 2014-04-15 10:30:00pm

// checkdate is used to validate a Gregorian date
if (checkdate(12, 31, 2000)) {
    echo "Date is valid";
} else {
    echo "Date is invalid";
} // Date is valid
?>

<!-- ----------------------------------------------------------------- -->

<!-- (e) PHP File System Functions -->