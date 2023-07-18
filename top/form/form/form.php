<?php
include "index.php";
$name = "Enter your name";
$age = "enter your age";
if (isset($_GET['name']) and isset($_GET['age'])) {
	$name = htmlspecialchars($_GET['name']);
	$age = (int)$_GET['age'];
}
print $name;
echo "<br>";
print $age;
?>
