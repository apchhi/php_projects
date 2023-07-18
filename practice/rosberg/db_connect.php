<?php
$host = $_SESSION['host'];
$username = $_SESSION['username'];
$password = $_SESSION['password'];
$dbname = $_SESSION['dbname'];
$conn = $_SESSION['conn'] = mysqli_connect($host, $username, $password, $dbname);
if ($conn === false) {
	die("Ошибка: " . mysqli_connect_error());
} else {
	echo "Подключение с базой данных успешно установлено<br><br>";
}
?>
