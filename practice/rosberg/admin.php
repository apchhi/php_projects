<?php
//require ('db_connect.php');	
require_once ('login.php');
$host = $_SESSION['host'];
$username = $_SESSION['username'];
$password = $_SESSION['password'];
$dbname = $_SESSION['dbname'];

function createTable() {
	$query = 'SELECT user_id, request_title, request FROM requests';
	require ('db_connect.php');	
	$result = mysqli_query($conn, $query);
	if (!$result) {
		die ("Ошибка подключения к базе данных " . mysqli_error());
	} else {
		echo "<table class='table'>
			<thead class='thead-light'>
			<tr>
			<th scope='col'>User ID</th>
			<th scope='col'>Title</th>
			<th scope='col'>Request</th>
			</tr>
			</thead>
			<tbody>";
		while ($row = mysqli_fetch_array($result)) {
			echo "<tr><th scope='row'>" . $row['user_id'] .
				"</th><td>" . $row['request_title'] .
				"</td><td>" . $row['request'] .
				"</td></tr>";
		}
		echo "</tbody></table>";
	}
		mysqli_close($conn);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="button_question">
			<form action="" method="post">
				<h3>Таблица пользовательских запросов</h3>
				<input name="actionButton" type="submit" value="Посмотреть">	
			</form>
		</div>
		<div class="table_question">	
<?php
if (isset($_POST['actionButton'])) {
	createTable();
}
?>
		</div>
	</div>	
</body>
</html>
