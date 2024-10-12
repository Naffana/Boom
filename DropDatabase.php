<?php 
require_once 'PDO.php';
$pdo -> query ('DROP database BOOM');
echo '<script>location.replace("index.html");</script>';
?>