<?php
$text= '89115245593';
$regexp= '/^8([0-9]{3})([0-9]{7})$/';
$matches= array();

if (preg_match($regexp, $text, $matches)) {
	echo "Everyrhing is right! Code operator {$matches[1]}\n";
	var_dump($matches);
} else {
	echo "Please, enter your number format is 89xxxxxxxxx\n";
};
?>
