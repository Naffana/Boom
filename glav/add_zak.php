<?php
session_start();
include 'Connect.php';
require_once("PDO.php");
$Idkor = $_POST['Add'];
$Idtv = $_POST['Addd'];
$pr = $_POST['Adddd'];
$kl = $_POST['Addddd'];
//$stmt = $pdo->query("Select * from `Корзина` where Id_tov=" . $Idkor . ";");
$kol = $kl-$_POST['Kol_vo'];
$Sum = $pr * $_POST['Kol_vo'];
//     while ($row = $stmt->fetch()) {
        
        if($kol<0){
                echo "<script>alert('Товаров осталось $kl')</script>";    
        }else{
        if($kol==0){
        $pdo -> query("Call zakk('" .$_SESSION['id_Kl']. "','".$Idtv."','".$_POST['Kol_vo']."', '".$Sum."' )");
        $pdo-> query("Delete from `Товары` where Id_Tov='".$Idtv."'");
        echo "<script>alert('Заказ поступил в обработку.\\n Ваша оплата составит $Sum рублей.\\n Спасибо за заказ!')</script>";
        }else{$pdo -> query("Call zakk('" .$_SESSION['id_Kl']. "','".$Idtv."','".$_POST['Kol_vo']."', '".$Sum."' )");
                $pdo -> query("Update `Товары` Set Kol_vo='".$kol."' where Id_Tov='".$Idtv."'");
                echo "<script>alert('Заказ поступил в обработку.\\n Ваша оплата составит $Sum рублей.\\n Спасибо за заказ!')</script>";
        }}
        echo "<script>location.replace('glav.php'); </script>";
?>