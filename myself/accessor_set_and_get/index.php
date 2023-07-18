<?php
// методы аксессоры __set() __get()

class Accessor {
	private $one = [];

	// получаем значение, перебираем массив и находим искомое значение
	public function __get($key) {
		if(array_key_exists($key, $this->one)) {
			return $this->one[$key];
		}else {
			return null;
		}
	}

		//присваиваем новое значением
	public function __set($key, $value) {
		$this->one[$key] = $value;
	}
}
$obj = new Accessor();

//присвоить новое значение объекту
$obj->text = 'Test wee object<br>';
$obj->name = 'Andry<br>';
$obj->name = 'Nik<br>';

echo '<pre>';
print_r($obj);
echo '<pre>';

class MyGroup {
	public function __construct($name, $age = 18, $sex) {
		$this->name = $name;
		$this->age = $age;
		$this->sex = $sex;
	}

	public function __get($key) {
		return $this->$key;	
	}
	public $name; 
	public $age; 
	public $sex;
}
// DZ:
// 1. Create object in parametrs /|\ name, age, sex and return parans or __get this params
// 2. Create public methode __ser() reloated age on +1
?>
