<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Добавление Клиента</title>
	<link rel="stylesheet" href="/reset.css" />
	<link rel="stylesheet" href="Add_style.css" />	
	<script ENGINE="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="jquery.maskedinput.min.js"></script>
</head>
<body>

<form method="POST">
	<div class="div">
<p>
	Введите логин
	<input type="text" class="text" name="Login"/>
	Введите пароль
	<input type="text"  class="text"  name="password"/>
</p>
<p>
	Введите фамилию   
	<input type="text"  class="text"  name="Surname"/> 
	Введите имя
	<input type="text" class="text"  name="Name"/>
	Введите отчество
	<input type="text" class="text"  name="Lastname"/>
</p>
<p>
	Введите адрес
	<input type="text" class="text"  name="adress">
	Введите индекс
	<input id="number"  type="text" class="text" name="indexx">
	Введите номер
	<input id="phone1" type="text" class="text" name="numberr">

</p>	
<p>	
	Введите дату
	<input type="date" class="data" name="data"/><br>
	</div>
	
	Админ <br>
	<div class="form_toggle">
	<div class="form_toggle-item item-1">
		<input id="fid-1" type="radio" name="radio" value="0" checked>
		<label for="fid-1">нет</label>
	</div>
	<div class="form_toggle-item item-2">
		<input id="fid-2" type="radio" name="radio" value="1">
		<label for="fid-2">да</label>
	</div>
</div>
</p>

	<input type="submit" class="knopka"  value="Добавить"/>
	
</form>
<script src="js.js"></script>
<?php 
include 'Connect.php';

if (isset($_POST['Login']) && isset($_POST['password']) && isset($_POST['radio']) && isset($_POST['Surname']) && isset($_POST['Name']) && isset($_POST['Lastname']) && isset($_POST['adress']) && isset($_POST['indexx']) && isset($_POST['numberr']) && isset($_POST['data']))
{ $password = md5(trim($_POST['password']));
	mysqli_query($link, "Insert Into `Клиенты` (Login, Password, Admin, Surname, Name, Lastname, Adress , Indexx, Numberr, Data_r)
		Values ('".$_POST['Login']."','".$password."',".$_POST['radio'].",'".$_POST['Surname']."','".$_POST['Name']."','".$_POST['Lastname']."','".$_POST['adress']."',".$_POST['indexx'].",'".$_POST['numberr']."','".$_POST['data']."');");
		echo "<script>alert('Аккаунт добавлен')</script>";
	echo '<script>location.replace("ViewKlienty.php");</script>';
} 
 ?>
</body>
</html>