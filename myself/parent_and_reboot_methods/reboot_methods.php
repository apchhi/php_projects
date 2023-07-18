<?php
//reboot methods

class Base {
	public function stars() {
		echo "I'm mentoh is parent class <br>";
	}
}

class Second extends Base {
		public function stars() {
			//perents call method
			parent::stars();
			//children call
			echo "I'm mentoh is child class <br>";
		}
}

$obj = new Second();
$obj->stars();


?>
