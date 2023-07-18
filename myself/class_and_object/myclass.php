<?php
//class - инсрукция
class MyClass {
	public $age;
	public $name;

}
//доступы видимости
//--publik
//--private
//--protected
// см. в записях

//create object 
//если ему не передаем ничего
$nick = new MyClass;
//присваиваем нове значение для переменной внутри объекта
$nick->age = 30;
$nick->name = "Nick";

//выводим
//echo $nick->name;

//удаляем объект
//unset($nick);

//если объекту передаем что-то
//$dasha = new MyClass();
//перезаписали сделав переменную
//$nick = 11;
//echo $nick;

class Location {
	public $x;
	private $y;
}

$loc = new Location();
$loc->x =23.33;
//область видимости "y" только внутри класса
$loc->y =54.22;



?>
