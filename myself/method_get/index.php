<?php
//peredacha paramg methodom GET
//echo $_GET['name'] . "<br>";
//echo $_GET['age'];

//echo '<pre>';
//super global massive GET
//print_r($_GET);
//echo '</pre>';

//params
//172.0.0.1:8080/?name=iisa&age=31
//
// params & arrays
//172.0.0.1:8080/?id[]=111&id[]=222&page[]=01

//cody URL function
//172.0.0.1:8080/?str=русское слово

echo "<a href='test.php?text=" . urlencode('Привет php!') . "'>ссылка</a>";

//parce_url(url) -info ob threar page
$url = "https://user:admin@site.com/page/index.php?id=12&value=val#author";
$url = parse_url($url);
echo '<pre>';
print_r($url);
echo '</pre>';
echo $url['host'];
// sheme - префикс http https ftp
// host - domen
// port - number port
// user - user
// pass - password
// patch - путь от корня 
// query - всë что расположено после символа ?
// fragment - всë что расположено после #

?>

