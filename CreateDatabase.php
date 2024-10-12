<?php
$adresserver='localhost';
$nameuser='root';
$password='';
$link=mysqli_connect($adresserver, $nameuser, $password) or die('Ошибка'.mysqli_error($link));
echo 'Вы успешно подключились к серверу';
// Создание SQL-запроса
if (mysqli_query($link,"CREATE DATABASE BOOM"))
{
	echo '<br> База данных создана';
	echo '<script>location.replace("index.html");</script>';
	exit;
}
else
{echo '<br> Ошибка при создании'.mysqli_error($link);}
mysqli_close($link);
?>