<?php
require_once 'login.php';
$host = $_SESSION['host'];
$username = $_SESSION['username'];
$password = $_SESSION['password'];
$dbname = $_SESSION['dbname'];
$result = '';
$selected = '';
$sql_record = '';
$request_title = 'Name Table';
function displayTable($result, $selected) {
	
	echo "<table class='table'>
					<thead class='thead-light'>
						<tr>
							<th scope='col'>User ID</th>";
				
	switch ($selected) {
		case 'all':
			echo "<th scope='col'>User Name</th>
						<th scope='col'>User Lastname</th>
						<th scope='col'>User Address</th>
						<th scope='col'>User Phone</th>";
		break;
		case 'names':
			echo "<th scope='col'>User Name</th>
						<th scope='col'>User Lastname</th>";
		break;
		case 'addresses':
			echo "<th scope='col'>User Address</th>";
		break;
		case 'phones':
			echo "<th scope='col'>User Phone</th>";
		break;
	}
	echo "</tr>
			</thead>
			<tbody>";
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo "<tr><th scope='row'>" . $row["user_id"] . "</th>";
	
			switch ($selected) {
				case 'all':
					echo "<td>" . $row["user_name"] . "</td><td>" . $row["user_lastname"] . "</td><td>" . $row["user_address"] . "</td><td>" . $row["user_phone"] . "</td></tr>";
				break;
				case 'names':
					echo "<td>" . $row["user_name"] . "</td><td>" . $row["user_lastname"] . "</td></tr>";
				break;
				case 'addresses':
					echo "<td>" . $row["user_address"] . "</td></tr>";
				break;
				case 'phones':
					echo "<td>" . $row["user_phone"] . "</td></tr>";
				break;
			}
		}
	}
	echo "</tbody>
		</table>";
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
		<div class="container_table">
		
<?php
	
if (isset($_GET['users_menu'])) {
	$selected = $_GET['users_menu'];
//echo $selected;
	switch ($selected) {
		case 'all':
			$sql_record = "SELECT user_id, user_name, user_lastname, user_address, user_phone FROM users";
			$request_title = "Select All";
		break;
		case 'names':
			$sql_record = "SELECT user_id, user_name, user_lastname FROM users";
			$request_title = "Select Names";
		break;
		case 'addresses':
			$sql_record = "SELECT user_id, user_address FROM users";
			$request_title = "Select Addresses";
		break;
		case 'phones':	
			$sql_record = "SELECT user_id, user_phone FROM users";
			$request_title = "Select Phones";
		break;
	}
//	echo $sql_record;
	require ('db_connect.php');
	$result = mysqli_query($conn, $sql_record);
	if (!$result) {
		echo "Ошибка: " . mysqli_error($conn) . "<br>";
	} else {
		$stmt = mysqli_prepare($conn, "INSERT INTO requests (user_id, request_title, request) VALUES (?, ?, ?)");
		mysqli_stmt_bind_param($stmt, "sss", $username, $request_title, $sql_record);
		mysqli_stmt_execute($stmt);

		echo "<h1>" . $request_title . "</h1>";
		displayTable($result, $selected);
//	print_r ($result);
		mysqli_close($conn);
	}
}	else {
	echo "Отсутствует запрос пользователя";
}
?>
			</div>
		</div>
	</body>
</html>
