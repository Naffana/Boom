
<?php
require_once ('PHPExcel/Classes/PHPExcel.php');
include 'Connect.php';
$query1 = mysqli_query($link, "SELECT * FROM zak");
$myrow = mysqli_fetch_array($query1);
$phpexcel = new PHPExcel(); 
$page = $phpexcel->setActiveSheetIndex(0); 
$page->setCellValue("A1", "Id заказа"); 
$page->setCellValue("B1", "Имя клиента");
$page->setCellValue("C1", "Адрес");
$page->setCellValue("D1", "Номер телефона");   
$page->setCellValue("E1", "Название товара"); 
$page->setCellValue("F1", "Количество");  
$page->setCellValue("G1", "Оплата");  
$s=2;
while($row=mysqli_fetch_array($query1))
{
$s++;
  $page->setCellValue("A$s", $row['Id_Ord']); 
  $page->setCellValue("B$s", $row['Kname']);
  $page->setCellValue("C$s", $row['adress']);
  $page->setCellValue("D$s", $row['Numberr']);   
  $page->setCellValue("E$s", $row['Tname']);  
  $page->setCellValue("F$s", $row['Kol_vo']);  
  $page->setCellValue("G$s", $row['oplata']); 
}
  $page->setTitle("Заказы"); 
  $objWriter = PHPExcel_IOFactory::createWriter($phpexcel, 'Excel2007');
  $objWriter->save("Заказы.xlsx");
  echo "<script>location.replace('glav.php');</script>";
?>