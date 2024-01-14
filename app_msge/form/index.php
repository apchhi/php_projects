<!--form back -->
<!DOCTYPE html>

<html>

 <head>

  <meta charset="utf-8">

  <title>Form</title>

 </head>

 <body>

  <form method="post" action="send.php">

	<h4>Город: </h4>
    	<input name="city" type="text" placeholder="* Москва" required />

	<h4>Месяц: </h4>
	<input name="month" type="text" placeholder="* март" required />
	
	<h4>Год: </h4>
	<input name="year" type="number" placeholder="* 1904" required />

	<br><br>
	<input type="submit" name="enter" value="Отправить" />

  </form>
	<style>
		form {
			width: 300px;
			border: 3px dashed red;
			background: #e0e0e0;
			margin: 0 auto;
			padding-bottom: 40px;
			text-align: center;
		}
		h4 {
			margin-bottom: 5px;
		}
	</style>
 </body>

</html>
