<?php
 
$dbhost = "localhost"; //КОД ДЛЯ ПОДКЛЮЧЕНИЯ БАЗЫ SQL
$dbuser = "root"; //root для open server
$dbpass = "root"; //root для open server
$dbname = "moto_905";
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
$mysqli->set_charset("utf-8"); //-> это как обращение.

if ($mysqli->connect_error) { //тут идет обращение к error то есть что делать при ошибке
  die("Не удалось подключиться к БД ".$mysqli->connect_error);
} //ОКОНЧАНИЕ КОДА ДЛЯ ПОДКЛЮЧЕНИЯ К SQL


?>