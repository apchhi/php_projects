<?php
//perents class
class Base {
	protected $sercet;
	//пробрасываем эту переменную в __construct
	public function __construct($secret) {
		$this->secret = $secret;
	}
	public $one;
//no access (net dostupa)
	private $text;
//method
	public function printer() {
		echo $this->one;
	}
	private function exe() {
		echo "dsafahkghadskdhkf";
	}
}

//adding к Base
class NewClass extends Base {
	public $two;
	//construct ot Base classa
	public function __construct($secret) {
		$this->secret = $secret;
	}
	public function by() {
		echo $this->two;
	}

}

//$obj  = new NewClass;
//$obj->one = "mr. ";
//$obj->two = "Anderson";
////no work (sm. vyshe)
//$obj->text = "Random text";

////this public method. mystique!!
//$obj->exe();

//$obj->printer();
//echo "<br>";
//$obj->by();


//object secret & params
$obj = new NewClass(11);

echo '<pre>';
print_r($obj);
echo '</pre>';



?>
