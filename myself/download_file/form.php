<?php
/*
 
echo $_FILES['filename']['size'] . "<br>";//size in byte
echo $_FILES['filename']['name'] . "<br>"; // name file
echo $_FILES['filename']['tmp_name'] . "<br>"; //nane temp file directory
 
 */

// 1kb=1024b & 1mb=1024b // 2*1024*1024

//copy file to wee directory
if(move_uploaded_file($_FILES['filename']['tmp_name'], 'temp/'.$_FILES['filename']['name']))
{	
	if($_FILES['filename']['size'] > 2*1024*1024) 
	{ exit("<p>Size your file more 2mb.</p>");	
	}else
	{
	echo 'File copy to server<br>';
	echo 'Haracteristics we file:<br>';
	echo 'Name file: ';
	echo $_FILES['filename']['name'] . '<br>';
		echo 'Size file: ';
	echo $_FILES['filename']['size'] . ' byte<br>';
		echo 'Type file: ';
	echo $_FILES['filename']['type'] . '<br>';
	}
}

?>
