<?php

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
//echo $family->friend();




class Hi {
	public static function hello() {
		return 'Hello my friend';
	}
	public function by() {
		return 'by';
	}
}
//echo Hi::hello();
//не выведет
//echo Hi::by();


// key word "self"

class Page {
	static $main = '<main>content</main><br>';
	public static function header() {
		return '<header></header>';
	}
	public static function footer() {
		return '<footer></footer><br>';
	}
	public static function getPage() {
		echo	self::header() . 
					self::$main .
					self::footer();
	}
}
Page::getPage();

?>
