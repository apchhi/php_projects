<?php

echo '<h1>JSON-format</h1>';

$arr = [
	'fio'=>'Иванов Степан',
	'age'=>'33', 
	'vk'=>'https://vk.com/id111111', 
	'learn'=>['HTML', 'CSS', 'PHP']
];
echo json_encode($arr, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . "<br>";//reloated in UNICODE(rus) "or"

//json_decode()- dekodiryvaet /|\

$json = '{"people":"Сидоров Никита","adress":"Ленина 23б","mob":["79942293522","79537754493"]}';

$arr2=json_decode($json, true);

echo '<pre>';
print_r($arr2);
echo '</pre>';





?>
