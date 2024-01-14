<?php

$arr = [];

for ($i=1; $i<11; $i++) 
{
	for ($j=1; $j<11; $j++)
	{
		$arr[$i][$j] = $i*$j;
	}
}

print_r ($arr);
?>
