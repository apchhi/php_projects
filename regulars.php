<?php
/* 1
$regexp= "/abba|abea/";
$text="aba aca aea abba abca abea";
$matches= array();
$count= preg_match_all($regexp, $text, $matches);
echo "Search enter: {$count}\n";
var_dump($matches);
 */

/* 2
$regexp = "/(ab)/";
$text = ["ab", "aba", "abab", "abababab", "abea"];
$result = preg_grep($regexp, $text);
print_r($result);
 */

/* 3
$regexp = "/2\+*3/";
$text = "23 2+3 2++3 2+++3 445 677";
$matches =[];
$count = preg_match_all($regexp, $text, $matches);
echo "Will meet {$count} times ||\n";
print_r($matches);
 */

/* 4
$regexp = '/a\w+a/i';
$text = 'aba accca azzza wwwwa';
echo preg_replace($regexp, '!', $text);
 */

/* 5
$text = 'aa aba abba abbba abbbba abbbbba';
$regexp = '/ab{4,}a/i';
$matches=[];
preg_match_all($regexp, $text, $matches);
print_r ($matches);
 */

/* 6
$text = 'ave a#b a2b a$b a4b a5b a-b acb';
$regexp = '/a[^[:alnum:]]b/i';
$matches=[];
preg_match_all($regexp, $text, $matches);
print_r ($matches);
 */

/* 7
$text = 'wйw wяw wëw wqw';
$regexp = '#.[А-Яа-яёЁ].#u';
$matches=[];
preg_match_all($regexp, $text, $matches);
print_r ($matches);
 */

/* 8
$text = 'aAXa aeffa aGha aza ax23a a3sSa';
$regexp = '#a[a-z0-9]*a#';
$matches=[];
preg_match_all($regexp, $text, $matches);
print_r ($matches);
 */

/* 9
$text = 'aaa aaa aaa';
$regexp = '/aaa$/';
$replacement = '!';
$result = preg_replace($regexp, $replacement, $text);
print_r($result);
 */

/* 10
$text = 'aeeea aeea aea axxa axxxa';
$regexp = '/ae{2,}a|ax+a/';
$result = preg_match_all($regexp, $text, $matches);
print_r ($matches);
 */

/* 11
$str = 'xbx aca aea abba adca abea';
$regexp = '/\b\w+\b/i';
$replacement = '!${0}!';
echo (preg_replace($regexp, $replacement, $str));
 */

/* 12
$str = 'a\\a a\\\\a a\\\\\\a';
$regexp = "/a\\\\{3}a/";
$replacement = '!';
echo (preg_replace($regexp, $replacement,-0 $str));
 */

/* 13
$str = 'bbb <b>hello</b>, <b>world</b> eee';
$regexp = '/hello|world/';
$replacement = '!';
$result = preg_replace($regexp, $replacement, $str);
echo $result;
 */

/* 14
$str = 'aaa:444 kkk:333';
$regexp = '/(\w+):(\d+)/';
$replacement = '${2}:${1}';
$result = preg_replace($regexp, $replacement, $str);
echo $result;
 */

/* 15
$str = '332 421 550';
$regexp = '/(3|5){2,}/';
$replacement = '!';
$result = preg_replace($regexp, $replacement, $str);
echo $result;
 */

/* 16
$str = 'aaa@bbb eee7@kkk';
$regexp = '#(\w+)@(\w+)#';
$replacement = '$2@$1';
$result = preg_replace($regexp, $replacement, $str);
echo $result;
 */

/* 17 SEARCH
$str = 'aaa bcd xxx efg';
$regexp = '#([a-z])\1+#';
$matches = [];
$result = preg_match_all($regexp, $str, $matches);
echo "Reload strings: "; print_r($matches[0]);
echo "<br>In values: "; print_r($matches[1]);
 */

/* 18		SEARCH E-MAIL TO TEXT 
$str='mymail@mail.ru my.mail@mail.ru my-mail@mail.ru my_mail@mail.ru mail@mail.by mail@yandex.ru';
$matches=[];
preg_match_all('~\b\s+\K\S+@\S+\.\S+\b~u', $str, $matches);
var_dump($matches);
 */

/* 19    DATE - smena mest $ zamena symbols
$str='31-12-2014';
$regexp='/(\d+)-(\d+)-(\d+)/';
$replacament='${3}.${2}.${1} ';
echo preg_replace($regexp, $replacament, $str);
 */


?>
