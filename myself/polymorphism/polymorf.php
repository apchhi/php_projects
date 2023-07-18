<?php
//Polymorphism


// abstract class parent
abstract class Pages{
	// abstract method
	abstract public function getAll();
}

	//class children
class AllSearch extends Pages{
	// nasledovanie
	public function getAll(){
		echo 'text';
}
}

$obj = new AllSearch();
//$obj->getAll();

//check true / false
var_dump ($obj instanceof AllSearch);


?>
