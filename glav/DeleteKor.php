<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include 'Connect.php';
    // require_once("PDO.php");
   mysqli_query($link, "DELETE from `Корзина` where Id_Kor = ".$_GET['delete'].";");
   echo "<script>alert('Товар удален из корзины')</script>";
    echo '<script>location.replace("glav.php");</script>';
    ?>
</body>
</html>