<?php
$adresserver = 'localhost';
$nameuser = 'root';
$password = '';
$namebd = 'BOOM';
$link = mysqli_connect($adresserver, $nameuser, $password) or die('Ошибка' . mysqli_error($link));
mysqli_select_db($link, $namebd) or die('Не могу подключиться');
mysqli_query( $link, 'SET character_set_database = utf8'); 
mysqli_query ($link, "SET NAMES 'utf8'");
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>
