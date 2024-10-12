<?php
session_start();
include 'Connect.php';
require_once("PDO.php");
$Idtv = $_GET['add'];
$stmt = $pdo->query("Select * from `Товары` where Id_Tov=" . $Idtv . ";");
    while ($row = $stmt->fetch()) { 
        $Pr=$row['Price'];
       $kl = $row['Kol_vo'];
    }
	$pdo -> query("Insert Into `Корзина`(`Id_Tov`, `id_Kl`, `Price`)
        Values (" .$Idtv. "," .$_SESSION['id_Kl']. "," .$Pr. " );");
        echo "<script>alert('Товар добавлен в корзину')</script>";

        if( $_SESSION['type'] == 'inst')
    {
        echo "<script>location.replace('viewTov.php?inst');</script>";
    }
    else{
    if($_SESSION['type'] == 'rs'){
    echo "<script>location.replace('viewTov.php?rs');</script>";
    }
    else{
    if($_SESSION['type'] == 'tr')
    {
        echo "<script>location.replace('viewTov.php?tr');</script>";
    }
    else{
    if($_SESSION['type'] == 'sm'){
    echo "<script>location.replace('viewTov.php?sm');</script>";
    }
    else{
    if($_SESSION['type'] == 'van')
    {
        echo "<script>location.replace('viewTov.php?van');</script>";
    }
    else{
    if($_SESSION['type'] == 'rak'){
    echo "<script>location.replace('viewTov.php?rak');</script>";
    }
    else{
    if( $_SESSION['type'] == 'un')
    {
        echo "<script>location.replace('viewTov.php?un');</script>";
    }
    else{
    if( $_SESSION['type'] == 'all'){
        echo "<script>location.replace('viewTov.php?all');</script>";
        }
    }}}}}}}
?>
