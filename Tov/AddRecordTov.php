<?php
include 'Connect.php';
$sql = "SELECT * FROM `Тип_товара`";
$result_select = mysqli_query($link,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Добавление товара</title>
	<link rel="stylesheet" href="/reset.css" />
	<link rel="stylesheet" href="/Klienty/Add_style.css" />	
</head>
<body>

<form method="POST">
	<div class="div">
<p>
	Введите название
	<input type="text" class="text" name="name"/>
	Выберите тип
	<select name="Type" class="text" size="1">
    <option disabled>Выберите тип</option>
    <?php while($object = mysqli_fetch_object($result_select)):?>
    <option value ="<?=$object->Id_type?>"><?=$object->Type?></option>
    <?php endwhile;?>
   </select>
</p>
<p>
	Введите цену   
	<input type="text" class="text" name="Price"/> 
	Введите количество
	<input type="text" class="text" name="Kol_vo"/>
	Введите марку
	<input type="text" class="text" name="Marka"/>
</p>
<p>
	Напишите описание
	<input type="text" class="text" name="Desk"/><br><br>
	<input type="submit" class="knopka" value="Добавить"/>
</p>
	
	</div>
</form>

<?php 
require_once("PDO.php");
if (isset($_POST['name']) && isset($_POST['Price']) && isset($_POST['Kol_vo']) && isset($_POST['Marka']) && isset($_POST['Type']))
{
	if($_POST['Price']>0 &&  $_POST['Kol_vo']>0){
		$pdo -> query("CAll tov('".$_POST['name']."','".$_POST['Type']."','".$_POST['Price']."',".$_POST['Kol_vo'].",'".$_POST['Marka']."','".$_POST['Desk']."','".$_POST['Imgg']."')");
		echo "<script>alert('Запись добавлена')</script>";
	echo '<script>location.replace("viewTov.php");</script>';}
	else{echo "<script>alert('Отрицательные значения нельзя!')</script>";}
} 

//mysqli_close($link);
 ?>


</body>
</html>