<!-- input data if form -->
<?php

//получаем данные с формы

$city = $_POST['city'];
$month = $_POST['month'];
$year = $_POST['year'];

//преобразование полученных данных
//преобразовывает спец символы согласно их кодировке в сущности (мнемоники)
$city = htmlspecialchars($city);
$month = htmlspecialchars($month);
$year = htmlspecialchars($year);

//декодинг всей URL адресации
$city = urldecode($city);
$month = urldecode($month);
$year = urldecode($year);

//удаление пробелов с обеих сторон ввода
$city = trim($city);
$month = trim($month);
$year = trim($year);

$weather = array('city'=>$city, 'month'=>$month, 'year'=>$year);

echo "В городе ", $weather['city'], ", в месяце ", $weather['month'], " ", $weather['year'], " году вы увидите следующую погоду: ";

foreach($weather as $value)
	echo '<br>&#9830; ', $value;
?>
