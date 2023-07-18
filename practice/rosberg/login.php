<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$username = !empty($_POST['name']) ? $_POST['name'] : '';
	$password = !empty($_POST['password']) ? $_POST['password'] : '';
	if (empty($username)) {
		echo "<p>Введите ваш логин</p><br><br>";
	} elseif (empty($password)) {
		echo "<p>Введите ваш пароль</p><br><br>";
	} else { 	
		$connectData = @file_get_contents('connectdb');
		if ($connectData === false) {
			die ("Файл конфига connectdb не читается<br><br>");
		} else {
			preg_match("/$username\{(.*)\}/u", $connectData, $matches);
//	print_r ($matches);
			$arrMatch = (json_decode('{'.$matches[1].'}', true));
			$_SESSION['host'] = $arrMatch['host'];
			$_SESSION['dbname'] = $arrMatch['dbname'];		
			$_SESSION['username'] = $username; 
			$_SESSION['password'] = $password;				
		}	
	}	
	require 'db_connect.php';
	$file_contents_admin = @file_get_contents('admin.php');
	$file_contents_user = @file_get_contents('form_menu.php');
	if (($file_contents_admin || $file_contents_user) === false) {
		die ("Файл question.php не читается<br><br>");
	}
	if ($username === 'admin') {
		require ('admin.php');
	} else {
		require ('form_menu.php');
	}			  
	mysqli_close($conn);
}
?>
