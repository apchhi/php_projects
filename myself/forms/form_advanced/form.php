<?php

//base check form
/*if (empty($_POST['name']) or empty($_POST['age'])) {
	exit('One or two stroke not values');
}else{
	$name = htmlspecialchars($_POST['name']);
	$age = htmlspecialchars($_POST['age']);
}	
echo $name . " " . $age;
 */

//top check form
if (!empty($_POST)) 
{	if(empty($_POST['name'])) 
	{	$errors[] = 'Stroke NAME not value';	}
	if(empty($_POST['age'])) 
	{	$errors[] = 'Stroke AGE not value';	}
	elseif (!is_numeric($_POST['age'])) 
	{	$errors[] = 'Stroke AGE hase not integet';	}
	if(!empty($errors))
	{	foreach ($errors as $err)	{	echo "<strong>$err</strong><br>";	}
	}else{
		echo "<pre>";
			print_r($_POST);
		echo "</pre>";
	}
}

?>
