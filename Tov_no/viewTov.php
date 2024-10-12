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
    if(isset($_GET['inst']))
    {
        $_SESSION['type'] = 'inst';
        $query = "SELECT * FROM tovar where Type = 'Инструменты'; ";
    }
    else{
    if(isset($_GET['rs'])){
        $_SESSION['type'] = 'rs';
    $query = "SELECT * FROM tovar where Type = 'расходные материалы';";
    }
    else{
    if(isset($_GET['tr']))
    {
        $_SESSION['type'] = 'tr';
        $query = "SELECT * FROM tovar where Type = 'трубы'; ";
    
    }
    else{
    if(isset($_GET['sm'])){
        $_SESSION['type'] = 'sm';
    $query = "SELECT * FROM tovar where Type = 'смесители и краны';";
    }
    else{
    if(isset($_GET['van']))
    {
        $_SESSION['type'] = 'van';
        $query = "SELECT * FROM tovar where Type = 'ванны'; ";
    }
    else{
    if(isset($_GET['rak'])){
        $_SESSION['type'] = 'rak';
    $query = "SELECT * FROM tovar where Type = 'раковины';";
    }
    else{
    if(isset($_GET['un']))
    {
        $_SESSION['type'] = 'un';
        $query = "SELECT * FROM tovar where Type = 'унитазы'; ";
    }
    else{
    if(isset($_GET['all'])){
        $_SESSION['type'] = 'all';
        $query = "SELECT * FROM tovar;";
        }
       
        
    else{$query = "SELECT * FROM tovar;";}}}}}}}}
    $posts = mysqli_query($link, $query);
    $num_rows = mysqli_num_rows($posts);
   if($num_rows == 0)
   {
    echo "<script> alert(ничего не найдено)</script>"; 
   }else{
    for ($i = 0; $i < $num_rows; $i++){
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
            <li><form action="Add_Kor.php" method="GET"> <input  type="hidden"  name="add" value=<?php echo $row['Id_tov'] ?>><button class="button" type="submit">В корзину</button></form>
        </ul>
        <?php 
    }

    };
   }

 

//mysqli_close($link);
 ?>


</body>

</html>