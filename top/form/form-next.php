<!-- 
1 checkbox
<form action='' method='POST'>
	<p>Your name: <input type='text' name='name' /></p>
	<input type='hidden' name='scale' value='0' />
	<p>Your name: <input type='checkbox' name='scale' value='1' /></p>
	<p><input type='submit' /></p>
</form>
-->

<!--
2 checked
<form action='' method='get'>
	<input type='radio' name='radio' value='1' checked>
	<input type='radio' name='radio' value='2'>
	<input type='radio' name='radio' value='3'>
	<input type='submit'>
</form>
-->


<form action='' method='get'>
	<select name='test'>
<option value='1'>item1</option>
<option value='2'>item2</option>
<option value='3'>item3</option>
	</select>
<input type='submit'>
</form>

<?php
/* 1 checkbox
if (isset($_POST['name'])) {
$name = $_POST['name'];
if(isset($_POST['scale']) && $_POST['scale'] == '1') 
{
	echo "Hello $name! Welkome.";
}
if (isset($_POST['scale']) && $_POST['scale'] == '0')
{
	echo "Enter right value.";
}
};
 */

/*
var_dump($_GET['radio']);
 */

var_dump($_GET['test']);

?>
