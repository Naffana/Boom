<?php 
        include 'Connect.php';
        if(isset($_POST['submit'])) {
          if (isset($_POST['Login']) && isset($_POST['password']) && isset($_POST['Surname']) && isset($_POST['Name']) && isset($_POST['Lastname']) && isset($_POST['adress']) && isset($_POST['indexx']) && isset($_POST['numberr']) && isset($_POST['data']))
        {
            

            if (!preg_match("#^[0-9-]+$#",$_POST['data'])) 
            {
                header("Location: reg_error.php?error= Дата не выбрана!");
                exit();
            }
            if (!preg_match("#^[0-9]+$#",$_POST['indexx'])) 
            {
                header("Location: reg_error.php?error= Индекс указан не верно");
                exit();
            }
        $login = $_POST['Login'];     
        $password = $_POST['password']; 
     
        if ($result = $link->query("SELECT `Login` FROM `Клиенты` WHERE `login` = '$login'"))
        {
        $row_cnt = $result->num_rows;
        $result->close();
        }
     
    if ($row_cnt > 0)
    {
    header("Location: reg_error.php?error=Такой ЛОГИН занят, придумайте другой");

    $link->close();
    }
    else{
      
                $login = mysqli_real_escape_string ($link, trim(htmlspecialchars($_POST['Login'])));
         
                $password = md5(trim($_POST['password']));
                mysqli_query( $link, "Insert Into `Клиенты` (Login, Password, Admin, Surname, Name, Lastname, Adress , Indexx, Numberr, Data_r)
             		Values ('".$login."','".$password."', 0 ,'".$_POST['Surname']."','".$_POST['Name']."','".$_POST['Lastname']."','".$_POST['adress']."',".$_POST['indexx'].",'".$_POST['numberr']."','".$_POST['data']."');");
                     echo "<script>alert('Регистрация прошла удачно'); location.replace('/index.html');</script>";
                }
               
        }
        else{

          header("Location: reg_error.php?error= Поля не заполнены");
          exit();
        }
        }

?>