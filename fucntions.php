<?php
//примеры реализации ф-ций

//strtoupper
//*mb_strtoupper (для кириллицы)
$string = "Привет, мир!";
$uppercased = mb_strtoupper($string, 'UTF-8');
echo $uppercased; // выведет "ПРИВЕТ, МИР!"

//strtolower
//*mb_ strtolower (для работы с кириллицей)
$string = "Привет, мир!";
$lowercased = mb_strtolower($string, 'UTF-8');
echo $lowercased; // выведет "привет, мир!"

//ucfirst
$string = "привет, мир!";
$ucfirst = mb_ucfirst($string, 'UTF-8');
echo $ucfirst; // выведет "Привет, мир!"

//lcfirst
$string = "Hello, world!";
$lcfirst = lcfirst($string);
echo $lcfirst; // выведет "hello, world!"


//ucwords
$string = "hello, world!";
$ucwords = ucwords($string);
echo $ucwords; // выведет "Hello, World!"

//`explode()`
$string = "apple,banana,orange";
$fruits = explode(",", $string);
print_r($fruits); // выведет Array ( [0] => apple [1] => banana [2] => orange )

//implode
$fruits = array("apple", "banana", "orange");
$string = implode(",", $fruits);
echo $string; // выведет "apple,banana,orange"

//strlen
//*mb_strlen (для работы с кириллицей)
$string = "Hello, world!";
$length = strlen($string);
echo $length; // выведет 13
$string = "Привет, мир!";
$length = mb_strlen($string);
echo $length; // выведет 12

//substr
//*mb_ substr(для работы с кириллицей)
$string = "Hello, world!";
$substring = substr($string, 0, 5);
echo $substring; // выведет "Hello"
$string = "Привет, мир!";
$substring = mb_substr($string, 0, 6);
echo $substring; // выведет "Привет"

//substr_replace
$string = "Hello, world!";
$new_string = substr_replace($string, "John", 0, 5);
echo $new_string; // выведет "John, world!"




?>
