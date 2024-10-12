<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/reset.css" />
    <link rel="stylesheet" href="klient_style.css" />
</head>

<body>

    <div class="wrap">
     
    <?php
    
    include 'Connect.php';

    $query = "SELECT * FROM `Клиенты` where admin = 0";
    $query1 = "SELECT * FROM `Клиенты` where admin = 1";
    $posts1 = mysqli_query($link, $query1);
    $posts = mysqli_query($link, $query);
    $num_rows1 = mysqli_num_rows($posts1);
    $num_rows = mysqli_num_rows($posts);
    echo "<table border='1px'>";
    ?>
    <thead>
        <td> Логин</td>
        <td>Пароль</td>
        <td>Фамилия</td>
        <td>Имя</td>
        <td>Отчество</td>
        <td>Адрес</td>
        <td>Индекс</td>
        <td>Номер</td>
        <td>Дата</td>
    </thead>
    <?php
  for ($i = 0; $i < $num_rows1; $i++) {
    while ($row = mysqli_fetch_array($posts1, MYSQLI_ASSOC)) {
    echo "<tr id=" . $row['id_Kl'] . ">";
    echo "<td >" . $row['Login'] . "</td>";
    echo "<td >******</td>";
    echo "<td >" . $row['Surname'] . "</td>";
    echo "<td >" . $row['Name'] . "</td>";
    echo "<td >" . $row['Lastname'] . "</td>";
    echo "<td >" . $row['Adress'] . "</td>";
    echo "<td >" . $row['Indexx'] . "</td>";
    echo "<td >" . $row['Numberr'] . "</td>";
     echo "<td >" . $row['Data_r'] . "</td>";
    echo "<td>Администратор";
    echo "</tr>";
    }
};
    for ($i = 0; $i < $num_rows; $i++) {
        while ($row = mysqli_fetch_array($posts, MYSQLI_ASSOC)) {
        echo "<tr id=" . $row['id_Kl'] . ">";
        echo "<td >" . $row['Login'] . "</td>";
        echo "<td >" . $row['Password'] . "</td>";
        echo "<td >" . $row['Surname'] . "</td>";
        echo "<td >" . $row['Name'] . "</td>";
        echo "<td >" . $row['Lastname'] . "</td>";
        echo "<td >" . $row['Adress'] . "</td>";
        echo "<td >" . $row['Indexx'] . "</td>";
        echo "<td >" . $row['Numberr'] . "</td>";
         echo "<td >" . $row['Data_r'] . "</td>";
        echo "<td><form action=\"DeleteKlienty.php\" method=\"GET\"> <input type=\"hidden\" name=\"delete\" value=\"".$row['id_Kl']."\">  <button type=\"submit\" onclick=\"return confirm('Вы действительно хотите удалить?')\">Удалить</button></form>" ;
        echo "<form action=\"UpdateKlienty.php\" method=\"GET\"><input type=\"hidden\" name=\"id\" value=\"".$row['id_Kl']."\"><button type=\"submit\">Изменить</button></form></td>";
        echo "</tr>";
        }
    };
    echo "</table>";
?>
        <form action="AddRecordKlienty.php" method="GET">
        <input  type="submit" name="add" class="submit" value="Добавить аккаунт"/> <br>
        </div>
    </form>
</body>

</html>