<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/reset.css" />
    <link rel="stylesheet" href="/Klienty/Add_style.css" />
    <title>Document</title>
</head>

<body>
    <?php
    include 'Connect.php';
$sql = "SELECT * FROM `Тип_товара`";
$result_select = mysqli_query($link,$sql);
    require_once 'PDO.php';
    $Idtv = $_GET['id'];
    $stmt = $pdo->query("Select * from `Товары` where Id_tov=" . $Idtv . ";");


    while ($row = $stmt->fetch()) { ?>
<form method="POST">
    <div class="div">
<p>
    Введите название
    <input type="text" class="text" value="<?php echo  $row['Name']; ?>" name="Name"/>
        Выберите тип
    <select name="Type" class="text" size="1">
    <option disabled>Выберите тип</option>
    <?php while($object = mysqli_fetch_object($result_select)):?>
    <option value ="<?=$object->Id_type?>"><?=$object->Type?></option>
    <?php endwhile;?>
   </select>
<p>
    Введите цену  
    <input type="text" class="text" value="<?php echo  $row['Price']; ?>" name="Price"/> 
    Введите количество
    <input type="text" class="text" value="<?php echo  $row['Kol_vo']; ?>" name="Kol_vo"/>
    Введите марку
    <input type="text" class="text" value="<?php echo  $row['Marka']; ?>" name="Marka"/>
</p>
<p>
    Напишите описание
    <input type="text" class="text" value="<?php echo  $row['Desk']; ?>" name="Desk"/>
    <br><br>
    <input type="submit"  class="knopka" value="Изменить">
</p>
    </div>
        </form>

    <?php
    }
   
    if (isset($_POST['Name']) && isset($_POST['Price']) && isset($_POST['Kol_vo']) && isset($_POST['Marka']) && isset($_POST['Type']))
{       if($_POST['Price']>0 &&  $_POST['Kol_vo']>0){
        $pdo->query("Update `Товары` Set Name='".$_POST['Name']."',Id_type = '".$_POST['Type']."', Price ='".$_POST['Price']."',Kol_vo ='".$_POST['Kol_vo']."',Marka ='".$_POST['Marka']."',Desk = '".$_POST['Desk']."', Imgg = '".$_POST['Imgg']."' where Id_tov=".$Idtv.";"); 
        
            echo "<script>alert('Запись обновлена')</script>";
            echo '<script>location.replace("viewTov.php");</script>';
        
    }else{echo "<script>alert('Отрицательные значения нельзя!')</script>";}
    }