<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/reset.css" />
    <link rel="stylesheet" href="viewTov_style.css" />
</head>

<body>
<form action="AddRecordTov.php" method="get">
<input  type="submit" name="add" class="submit" value="Добавить товар">
</form>
    <?php
    include 'Connect.php';
    //  $adresserver = 'localhost';
    // $nameuser = 'root';
    // $password = '';
    // $namebd = 'BOOM';
    // $link = mysqli_connect($adresserver, $nameuser, $password) or die('Ошибка' . mysqli_error($link));
    // mysqli_select_db($link, $namebd) or die('Не могу подключиться');
    if(isset($_GET['inst']))
    {
        $query = "SELECT * FROM tovar where Type = 'Инструменты' order by Id_tov desc; ";
    }
    else{
    if(isset($_GET['rs'])){
    $query = "SELECT * FROM tovar where Type = 'расходные материалы' order by Id_tov desc;";
    }
    else{
    if(isset($_GET['tr']))
    {
        $query = "SELECT * FROM tovar where Type = 'трубы' order by Id_tov desc; ";
    }
    else{
    if(isset($_GET['sm'])){
    $query = "SELECT * FROM tovar where Type = 'смесители и краны' order by Id_tov desc;";
    }
    else{
    if(isset($_GET['van']))
    {
        $query = "SELECT * FROM tovar where Type = 'ванны' order by Id_tov desc; ";
    }
    else{
    if(isset($_GET['rak'])){
    $query = "SELECT * FROM tovar where Type = 'раковины' order by Id_tov desc;";
    }
    else{
    if(isset($_GET['un']))
    {
        $query = "SELECT * FROM tovar where Type = 'унитазы' order by Id_tov desc; ";
    }
    else{
    if(isset($_GET['all'])){
        $query = "SELECT * FROM tovar order by Id_tov desc;";
        }
        else{$query = "SELECT * FROM tovar order by Id_tov desc;";}
            }}}}}}}
    $posts = mysqli_query($link, $query);
    $num_rows = mysqli_num_rows($posts);
   
    for ($i = 0; $i < $num_rows; $i++) {
        while ($row = mysqli_fetch_array($posts, MYSQLI_ASSOC)) {
            ?>
             <ul class="ul" id= <?php echo $row['Id_tov'] ?>>
            <li class="name"> <?php echo $row['Name'] ?> </li>
            <li class="Img"> <div class="img"> <img src="https://ib.lbrd.ru/fileentry/get/origin/b4/02/e7209dcd267d5fe83c0372835dfe.jpeg"></img></div> </li>
            <li class="price" > цена - <?php echo $row['Price'] ?> </li>
            <li class="Kol_vo "> количество - <?php echo $row['Kol_vo'] ?> </li>
            <li class="Marka"> марка - <?php echo $row['Marka'] ?> </li>
            <li class="Desk"> описание: <?php echo $row['Desk']  ?></li>
            <li class="Type"> тип - <?php echo $row['Type']  ?></li>
            <li><form action="DeleteTov.php" method="GET"> <input  type="hidden"  name="delete" value=<?php echo $row['Id_tov'] ?>>  <button class="submit1" type="submit" onclick="return confirm('Вы действительно хотите удалить?')">Удалить</button></form>
            <form action="UpdateTov.php" method="GET"><input  type="hidden" class="submit" name="id" value=<?php echo $row['Id_tov']?>> <button class="submit1" type="submit">Изменить</button></form>
            </li>
        </ul>
        <?php 
    }

    };
    
?>

</body>

</html>