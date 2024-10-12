<?php
session_start();
 include 'Connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/reset.css" />
    <link rel="stylesheet" href="viewTov_style.css" />
</head>

<body>
    <?php
   
    //  $adresserver = 'localhost';
    // $nameuser = 'root';
    // $password = '';
    // $namebd = 'BOOM';
    // $link = mysqli_connect($adresserver, $nameuser, $password) or die('Ошибка' . mysqli_error($link));
    // mysqli_select_db($link, $namebd) or die('Не могу подключиться');
    if(isset($_GET['inst']))
    {
        $query = "SELECT * FROM tovar where Type = 'Инструменты'; ";
    }
    else{
    if(isset($_GET['rs'])){
    $query = "SELECT * FROM tovar where Type = 'расходные материалы';";
    }
    else{
    if(isset($_GET['tr']))
    {
        $query = "SELECT * FROM tovar where Type = 'трубы'; ";
    }
    else{
    if(isset($_GET['sm'])){
    $query = "SELECT * FROM tovar where Type = 'смесители и краны';";
    }
    else{
    if(isset($_GET['van']))
    {
        $query = "SELECT * FROM tovar where Type = 'ванны'; ";
    }
    else{
    if(isset($_GET['rak'])){
    $query = "SELECT * FROM tovar where Type = 'раковины';";
    }
    else{
    if(isset($_GET['un']))
    {
        $query = "SELECT * FROM tovar where Type = 'унитазы'; ";
    }
    else{
    if(isset($_GET['all'])){
        $query = "SELECT * FROM tovar;";
        }
        else{$query = "SELECT * FROM tovar;";}
            }}}}}}}
    $posts = mysqli_query($link, $query);
    $num_rows = mysqli_num_rows($posts);
   
    for ($i = 0; $i < $num_rows; $i++) {
        while ($row = mysqli_fetch_array($posts, MYSQLI_ASSOC)) {
            ?>
            <ul class="ul" id= <?php echo $row['Id_tov'] ?>>
            <li class="name"> <?php echo $row['Name'] ?> </li>
            <li class="Img"> <div class="img"> <img src="https://ib.lbrd.ru/fileentry/get/origin/b4/02/e7209dcd267d5fe83c0372835dfe.jpeg"></div> </li>
            <li class="price" > цена - <?php echo $row['Price'] ?> </li>
            <li class="Kol_vo "> количество - <?php echo $row['Kol_vo'] ?> </li>
            <li class="Marka"> марка - <?php echo $row['Marka'] ?> </li>
            <li class="Desk"> описание: <?php echo $row['Desk']  ?></li>
            <li class="Type"> тип - <?php echo $row['Type']  ?></li>
        </ul>
        <?php 
    }

    };


 

//mysqli_close($link);
 ?>


</body>

</html>