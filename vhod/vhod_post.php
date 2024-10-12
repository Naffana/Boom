<?php
  include ('Connect.php');
    session_start();
    if(isset($_POST['submit'])) {
   if (isset($_POST['login']) && isset($_POST['password'])){
        $login = mysqli_real_escape_string($link, htmlspecialchars($_POST['login']));
    $password = md5(trim($_POST['password']));
     if ($result = $link->query("SELECT * FROM `Клиенты` WHERE  `login` = '$login' and `Password` = '$password'; "))
        {
        $row_cnt = $result->num_rows;
        }
        if ($row_cnt == 1)
    {
        $res = mysqli_fetch_assoc($result);
        if($res['Admin']==true){
            $res = $res['id_Kl'];
            $_SESSION['id_Kl'] = $res;
            $_SESSION['Name'] = $login;
            echo "<script>location.replace('/glav_Adm/glav.php');</script>";
        }else{
            if($res['Admin']==false){
                $res = $res['id_Kl'];
            $_SESSION['id_Kl'] = $res;
            $_SESSION['Name'] = $login;
            echo "<script>location.replace('/glav/glav.php');</script>";
            }
        }
    $link->close();
    }
    else {
                echo "<script>alert('неверный логин или пароль'); location.replace('/index.html');</script>";
    }
   }

}
if(isset($_POST['submit1']))
{
echo "<script>location.replace('/glav_no/glav.php');</script>";
}
   ?>