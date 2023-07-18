<?php
//статические переменные 

class SomePeople {
	public $age;
	public $name;
	//static peremennaya class
	public static $people = 1;
	
}

//input static peremennoy
//echo SomePeople::$people;

$tim = new SomePeople();
$tim->age = 33;
echo $tim->age;

//"bob" - simlink variable "tim"
$bob = $tim;
$tim->age = 35;
echo $tim->age;


$first = $second = 3;
$first = 4;
//echo $first . $second;




?>
