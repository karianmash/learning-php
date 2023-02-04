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
<!-- syntax -->
<?php
// fopen is used to open a file
$file = fopen("welcome.txt", "r");

// fread is used to read a file
echo fread($file, filesize("welcome.txt"));

// fclose is used to close an open file
fclose($file);

// fwrite is used to write to a file
fwrite($file, "Hello World. Testing!");

// file_exists is used to check if a file or directory exists
if (file_exists("welcome.txt")) {
    echo "The file exists";
} else {
    echo "The file does not exist";
} // The file exists

// unlink is used to delete a file
unlink("welcome.txt");

// mkdir is used to create a directory
mkdir("newfolder");

// rmdir is used to remove a directory
rmdir("newfolder");

// copy is used to copy a file
copy("welcome.txt", "welcome2.txt");

// rename is used to rename a file or directory
rename("welcome2.txt", "welcome3.txt");

// is_dir is used to check if a file is a directory
if (is_dir("newfolder")) {
    echo "It is a directory";
} else {
    echo "It is not a directory";
} // It is a directory

// is_file is used to check if a file is a regular file
if (is_file("welcome.txt")) {
    echo "It is a regular file";
} else {
    echo "It is not a regular file";
} // It is a regular file

// file_get_contents is used to read a file into a string
echo file_get_contents("welcome.txt");

// file_put_contents is used to write a string to a file
file_put_contents("welcome.txt", "Hello World. Testing!");

// file is used to read a file into an array
print_r(file("welcome.txt"));

// scandir is used to list files and directories inside the specified path
$files = scandir("newfolder");

// chdir is used to change the current directory
chdir("newfolder");

// getcwd is used to get the current directory
echo getcwd(); // /home/user/newfolder

// fileatime is used to get the last access time of a file
echo date("Y-m-d h:i:sa", fileatime("welcome.txt")); // 2020-03-01 12:00:00am

// filectime is used to get the inode change time of a file
echo date("Y-m-d h:i:sa", filectime("welcome.txt")); // 2020-03-01 12:00:00am

// filemtime is used to get the time the file was last modified
echo date("Y-m-d h:i:sa", filemtime("welcome.txt")); // 2020-03-01 12:00:00am

?>

<!-- ----------------------------------------------------------------- -->

<!-- (f) PHP Form Handling Functions -->
<!-- syntax -->
<?php
// htmlspecialchars is used to convert special characters to HTML entities
echo htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES); // &lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;

// strip_tags is used to strip HTML and PHP tags from a string
echo strip_tags("<p>Test paragraph.</p><!-- Comment --> <a href='#fragment'>Other text</a>"); // Test paragraph. Other text

// stripslashes is used to un-quotes a quoted string
echo stripslashes("Is your name O\'reilly?"); // Is your name O'reilly?

// htmlentities is used to convert all applicable characters to HTML entities
echo htmlentities("A 'quote' is <b>bold</b>"); // A &#039;quote&#039; is &lt;b&gt;bold&lt;/b&gt;

// nl2br is used to insert HTML line breaks before all newlines in a string
echo nl2br("One line.\r Another line."); // One line. Another line.

// trim is used to strip whitespace (or other characters) from the beginning and end of a string
echo trim(" Hello World "); // Hello World

// ltrim is used to strip whitespace (or other characters) from the beginning of a string
echo ltrim(" Hello World "); // Hello World

// rtrim is used to strip whitespace (or other characters) from the end of a string
echo rtrim(" Hello World "); // Hello World

// strlen is used to get the length of a string
echo strlen("Hello world!"); // 12

// strcmp is used to binary safe string comparison
echo strcmp("Hello world!", "Hello world!"); // 0

// strcasecmp is used to binary safe case-insensitive string comparison
echo strcasecmp("Hello world!", "HELLO WORLD!"); // 0

// strncmp is used to binary safe string comparison of the first n characters
echo strncmp("Hello world!", "Hello world!", 6); // 0

// strncasecmp is used to binary safe case-insensitive string comparison of the first n characters
echo strncasecmp("Hello world!", "HELLO WORLD!", 6); // 0

// strnatcmp is used to string comparison using a "natural order" algorithm
echo strnatcmp("2Hello world!", "10Hello world!"); // -1

// strnatcasecmp is used to case-insensitive string comparison using a "natural order" algorithm
echo strnatcasecmp("2Hello world!", "10HELLO WORLD!"); // -1

// substr_compare is used to binary safe comparison of two strings from an offset, up to length characters
echo substr_compare("Hello world!", "Hello earth!", 6, 5); // 0

// substr_count is used to count the number of substring occurrences
echo substr_count("Hello world. The world is nice", "world"); // 2

// substr is used to return part of a string
echo substr("Hello world", 6); // world

// substr_replace is used to replace text within a portion of a string
echo substr_replace("Hello world", "earth", 6); // Hello earth

// str_replace is used to replace all occurrences of the search string with the replacement string
echo str_replace("world", "Dolly", "Hello world!"); // Hello Dolly!

// str_ireplace is used to replace all occurrences of the search string with the replacement string
echo str_ireplace("WORLD", "Dolly", "Hello world!"); // Hello Dolly!

// str_repeat is used to repeat a string
echo str_repeat("Hello", 2); // HelloHello

// str_shuffle is used to randomly shuffle all characters in a string
echo str_shuffle("Hello world!"); // !dlrow olleH

// str_split is used to convert a string to an array
print_r(str_split("Hello")); // Array ( [0] => H [1] => e [2] => l [3] => l [4] => o )

// str_word_count is used to return information about words used in a string
print_r(str_word_count("Hello world!", 1)); // Array ( [0] => Hello [1] => world )

// strrev is used to reverse a string
echo strrev("Hello world!"); // !dlrow olleH

// strtolower is used to make a string lowercase
echo strtolower("Hello WORLD!"); // hello world!

// strtoupper is used to make a string uppercase
echo strtoupper("Hello WORLD!"); // HELLO WORLD!

// ucfirst is used to make a string's first character uppercase
echo ucfirst("hello world!"); // Hello world!

// lcfirst is used to make a string's first character lowercase
echo lcfirst("HELLO WORLD!"); // hELLO WORLD!

// ucwords is used to capitalize the first character of each word in a string
echo ucwords("hello world!"); // Hello World!

// strip_tags is used to strip HTML and PHP tags from a string
echo strip_tags("<p>Test paragraph.</p><!-- Comment --> <a href='#fragment'>Other text</a>"); // Test paragraph. Other text

// htmlspecialchars is used to convert special characters to HTML entities
echo htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES); // &lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;

// htmlentities is used to convert all applicable characters to HTML entities
echo htmlentities("A 'quote' is <b>bold</b>"); // A &#039;quote&#039; is &lt;b&gt;bold&lt;/b&gt;

// nl2br is used to insert HTML line breaks before all newlines in a string
echo nl2br("One line.\r Another line."); // One line. Another line.

// md5 is used to calculate the md5 hash of a string
echo md5("Hello world!"); // 5eb63bbbe01eeed093cb22bb8f5acdc3

// sha1 is used to calculate the sha1 hash of a string
echo sha1("Hello world!"); // 2aae6c35c94fcfb415dbe95f408b9ce91ee846ed

// crypt is used to one-way string hashing
// echo crypt("Hello world!"); // $1$J9..$1J9XZ7Z7Z7Z7Z7Z7Z7Z7Z7

?>

<!-- ----------------------------------------------------------------- -->