<?php
/*
$file1 = file_get_contents('test1.txt');
$file2 = file_get_contents('test2.txt');
echo (int)$file1 + (int)$file2 . "<br>";

$arr = [1, 2, 4, 3, 5];
$sum = array_sum($arr);
//echo $sum;
file_put_contents('massiv.txt', $sum);
echo file_get_contents('massiv.txt') . "<br>";

//combo operations
$num = file_get_contents('number.txt');
$power = pow($num, 3);
//echo $power;
file_put_contents('number.txt', $power);
echo file_get_contents('number.txt') . "<br>";
*/
$stroke = "";
$arr_name =['1.txt', '2.txt', '3.txt'];
foreach($arr_name as &$value) {
	$stroke.= file_get_contents($value) . " ";
}
//echo $stroke;
file_put_contents('new.txt', $stroke);

?>
