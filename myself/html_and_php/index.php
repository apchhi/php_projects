<?php
//razbitie string in value one massive
$str = 'Name LastName E-mail Mobile';
$newArray = explode(' ' , $str);
echo "<pre>";
print_r($newArray);
echo "</pre>";

//kodyrovanie serialize & unserialize
$num = array(4145115, 2211, 443, 100000000000);
$str = serialize($num);
echo $str . "<br>";
$arr = unserialize($str);
echo "<pre>";
print_r ($arr);
echo "</pre>";

?>
