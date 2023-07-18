<?php
//derevo docs - DIRECTORY on file
echo $_SERVER['DOCUMENT_ROOT'];
echo "<br>";
//params type documents
echo $_SERVER['HTTP_ACCEPT'] . "<br>";

//predpochtenye languages
echo $_SERVER['HTTP_ACCEPT_LANGUAGE'];
echo "<br>";

//poluchenye host
echo $_SERVER['HTTP_HOST'];
echo "<br>";

//put otkuda prishel user locah site and global i-net (c kakogo site)
echo $_SERVER['HTTP_REFERER'];
echo "<br>";

//real user or bot. base useragent program i-net
echo $_SERVER['USER_AGENT'];
echo "<br>";

//vozvrashaet IP adress client
echo $_SERVER['REMOTE_ADDR'];
echo "<br>";

//pri VPS or VPN u user-a prosmotret' data real  IP
//predidyshiy
echo $_SERVER['HTTP_X_FORWARDED_FOR'];
echo "<br>";

//abdolutley treck on file (D:\php\file)
echo $_SERVER['SCRIPT_FILENAME'];
echo "<br>";

//otnositelniy track on file (https://site.ru/files/)
echo $_SERVER['SERVER_NAME'] . "/blocg/pact-to-file.html";
echo "<br>";

//check method zaprosa (GET, POST, ...)
echo $_SERVER['REQUEST_METHOD'];
echo "<br>";

//params user peredavaemye nam (http://?...&.../)
echo $_SERVER['QUERY_STRING'];
echo "<br>";

//probroshenye params posle "/" (kornua site)
echo $_SERVER['REQUEST_URL'] . "<hr>";


//check all elements $_SERVER
echo '<pre';
print_r($_SERVER);
echo '<pre';

?>
