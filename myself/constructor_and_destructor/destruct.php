<?php

// destruct() --- Деструктор
class Constr {
	private $y;
	private $x;

	public function __destruct() {
		echo "отработал деструктор";
		//замена значения, если оно было определено в constructor() - конструкторе
		$this->y = 0;
	}

	public function getY() {
		return $this->y;
	}
	public function getX() {
		return $this->x;
	}
}
$obj = new Constr('some text');

// при существующем объекте конструкторе
echo $obj->getY();
?>
