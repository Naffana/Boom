<?php
session_start();
        include 'Connect.php';
    
        // echo "Подключились";

    // $stmt = $pdo->query('Select * FROM `Продукция`');
    //echo "<p style='font-size:20px; color:black'></p>";    
?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/reset.css" />
    <link rel="stylesheet" href="/Tov_g/viewTov_style.css" />
</head>
<body>
    
<!-- <form method="POST">
    <input type = 'text' name='query' placeholder="поиск">
    <input type="submit" id="submit" name="submit" value="Поиск">
</form>  -->
<?php
    function search ($query, $link) {
        $uploaddir=' ';$text = ''; $query = trim($query);
        if(!empty($query))   {
               
                        $result=mysqli_query($link, "SELECT * FROM `Товары` left join `Тип_товара` on Товары.Id_type=Тип_товара.Id_type
                        WHERE `Name` LIKE '%".$query."%' or `Type` LIKE '%".$query."%' or `Price` LIKE '%".$query."%' or
                        `Marka` LIKE '%".$query."%' or `Desk` LIKE '%".$query."%'");
                        $num=mysqli_num_rows($result);  
                        if($num > 0)  
                        { 
                            while ($row = mysqli_fetch_assoc($result)) 
                            {
                                    ?>
                                    <ul class="ul" id= <?php echo $row['Id_tov'] ?>>
                                    <li class="name"> <?php echo $row['Name'] ?> </li>
                                    <li class="Img"> <div class="img"> <img src="https://ib.lbrd.ru/fileentry/get/origin/b4/02/e7209dcd267d5fe83c0372835dfe.jpeg"></div> </li>
                                    <li class="price" > цена - <?php echo $row['Price'] ?> </li>
                                    <li class="Kol_vo "> количество - <?php echo $row['Kol_vo'] ?> </li>
                                    <li class="Marka"> марка - <?php echo $row['Marka'] ?> </li>
                                    <li class="Desk"> описание: <?php echo $row['Desk']  ?></li>
                                    <li class="Type"> тип - <?php echo $row['Type']  ?></li>
                                </ul> 
                            <?php
                            }
                            // do  ;                   
                        }
                        else { echo "<script>alert('По вашему запросу ничего не найдено')</script>";  
                        }  
                    
                
            }
            else   {echo "<script>alert('Задан пустой поисковый запрос')</script>"; }
    }

if (isset($_POST['button'])) { 
    // echo "<script>alert('$s')</script>";
    $search_result = search ($_POST['query'], $link); 
    echo $search_result; 
}
// else{echo "<script>alert('Поле поиска пустое') break;</script>"; }

// }

?>
</body>
</html>