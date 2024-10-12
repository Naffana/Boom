<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/reset.css" />
	<link rel="stylesheet" href="Add_style.css" />	
	<script ENGINE="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="jquery.maskedinput.min.js"></script>
</head>

<body>
    <?php

    require_once 'PDO.php';
    $IdKl = $_GET['id'];
    $stmt = $pdo->query("Select * from `Клиенты` where id_Kl=" . $IdKl . ";");


    while ($row = $stmt->fetch()) { ?>
<form method="POST">
<div class="div">
<p>
    Введите логин
    <input type="text" class="text" value="<?php echo  $row['Login']; ?>" name="Login"/>
    Введите пароль
    <input type="text" class="text" value="<?php echo  $row['Password']; ?>" name="Password"/>
</p>
<p>
    Введите фамилию   
    <input type="text" class="text" value="<?php echo  $row['Surname']; ?>" name="Surname"/> 
    Введите имя
    <input type="text" class="text" value="<?php echo  $row['Name']; ?>" name="Name"/>
    Введите отчество
    <input type="text" class="text" value="<?php echo  $row['Lastname']; ?>" name="Lastname"/>
</p>
<p>
    Введите адрес
    <input type="text" class="text" value="<?php echo  $row['Adress']; ?>" name="Adress"/>
    Введите индекс
    <input type="text" id="number" class="text" value="<?php echo $row['Indexx']; ?>" name="Indexx"/>
    Введите номер
    <input type="text" id="phone1" class="text" value="<?php echo $row['Numberr'] ;?>" name="Numberr"/>

</p>
    
<p> 
    Введите дату
    <input type="date" class="data" value="<?= $row['Data_r'] ?>" name="Data_r"/><br><br>             
                 <input type="submit" class="knopka" value="Изменить" /></p>
                 </div>
        </form>

    <?php
    }
   
    if (isset($_POST['Login']) && isset($_POST['Password']) && isset($_POST['Surname']) && isset($_POST['Name']) && isset($_POST['Lastname']) && isset($_POST['Adress']) && isset($_POST['Indexx']) && isset($_POST['Numberr']) && isset($_POST['Data_r'])) {
        $password = md5(trim($_POST['Password']));
        $pdo->query("Update `Клиенты` Set Login='".$_POST['Login']."',Password = '".$password."', Surname ='".$_POST['Surname']."',Name ='".$_POST['Name']."',Lastname ='".$_POST['Lastname']."',Adress = '".$_POST['Adress']."', Indexx = ".$_POST['Indexx'].", Numberr ='".$_POST['Numberr']."', Data_r ='".$_POST['Data_r']."' where id_Kl=".$IdKl.";"); 
        {
            echo "<script>alert('Запись обновлена')</script>";
            echo '<script>location.replace("ViewKlienty.php");</script>';
        }
    }
    ?>
<script src = 'js.js'></script>
    </body>
</html>