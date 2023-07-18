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
	<div class="container_user_menu">
		<br><br>
		<form method="get" action="question.php">
			<label for="dropdown">Выберите значение из списка:</label>
			<select name="users_menu" required="required">	
				<option value="all">Список всех пользователей</option>
				<option value="names">Имена и фамилии пользователей</option>
				<option value="addresses">Адреса пользователей</option>
				<option value="phones">Телефоны пользователей</option>
			</select>	
			<br><br>
			<input type="submit" name="submit" value="Отправить" />	
		</form>
	<br>

	</div>
	</div>	
</body>
</html>

