<script type="text/javascript"> 
setTimeout(function(){
location="reg.php";
}, 0000);
</script>
<?php
$error = $_GET['error'];
 
echo "<script>alert('$error');</script>";
?>