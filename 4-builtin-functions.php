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
echo count("Hello World!"); // 12