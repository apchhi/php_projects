<?php

// constructor()
//
class Constr {
	private $y;
	private $x;

	public function __construct($x = 0) {
		echo "отработал конструктор(метод)<br>";
		$this->y = 22;
		$this->x = $x;
	}

	public function getY() {
		return $this->y;
	}
	public function getX() {
		return $this->x;
	}
}
$obj = new Constr('some text');

echo $obj->getY();
echo $obj->getX();

?>
