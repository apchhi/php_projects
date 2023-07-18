<?php

/*
class Hi {
	public function hello() {
		return 'Hello my fritnds';
	}
	public function by() {
		return 'By!';
	}
}

$obj = new Hi;

echo $obj->hello();
echo "<br>";
echo $obj->by();
//var_dump ($obj);
 */

// create methods
class Family {
	//private valiable
	private $boy;
	private $girl;

	//method 1 - задать имя мальчику
	//method 2 - задать имя девочке
	public function setNameBoy($boy) {
		$this->boy = $boy;
	}
	public function setNameGirl($girl) {
		$this->girl = $girl;
	}
	//получаем имена
	public function getNameBoy() {
		return $this->boy;
	}
	public function getNameGirl() {
		return $this->girl;
	}
	//объединяем имена и выводим их
	public function friend() {
		return $this->getNameGirl() . " and " . $this->getNameBoy() . " is a family";
	}
}

//экземпляр класса (object)
$family = new Family;

//method
$family->setNameBoy('Nick');
$family->setNameGirl('Nina');

echo $family->friend();
?>
