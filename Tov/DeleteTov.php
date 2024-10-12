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
   mysqli_query($link, "DELETE from `Товары` where Id_tov = ".$_GET['delete'].";");
   echo "<script>alert('Запись удалена')</script>";
    echo '<script>location.replace("ViewTov.php");</script>';
    ?>
</body>
</html>