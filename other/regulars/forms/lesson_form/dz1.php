
<form action="" method="GET">
<input type="text" name="num1">
<input type="text" name="num2">
<input type="text" name="num3">
<input type="submit">
</form>

<?php
if (isset($_GET)) {
	echo $_GET['num1']+ $_GET['num2']+ $_GET['num3'];
};
?>
