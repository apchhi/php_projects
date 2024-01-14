<?php
session_start();
if (isset($_POST['submit'])){
	$_SESSION=$_POST;
	print_r (array_sum($_SESSION));
} else {
	echo "no";
}
	/*echo htmlspecialchars($_POST["num1"])}; /*= $_SESSION["num1"];                                         
	$_POST["num2"] = $_SESSION["num2"]; */

/*session_start();
if (isset($_SESSION)) {
	print_r ($_SESSION["num1"] + $_SESSION["num2"]);
}
 */
?>
