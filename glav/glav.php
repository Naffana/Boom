<?php
session_start();
include 'Connect.php';
$name = $_SESSION['Name'];
$res = $_SESSION['id_Kl'];
// echo "<script>alert('$name');</script>";
?>

<!DOCTYPE html>
<html>	
<head>
    <meta charset="utf-8">
    <title>Главная</title>
	 <link rel="stylesheet" href="/reset.css" />
    <link rel="stylesheet" href="glav_style.css" />
	<script ENGINE="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>

	<div class="wrap">	
		<div class="menu">	
			<a href="#"  class="menu-btn" ><span></span></a>
			<nav class="menu-list">
				<div class="block">
					<!-- <input class="aa" type="submit" name="name" value="$name"> -->
					<label>Добро пожаловать, <?php echo $name;?>!</label>
				</div>
				
				<div class="block1">
					<form action="Search.php" name="qwe" method="POST">
					<div class="search"> 
					<input type = 'text' name='query' placeholder="поиск" class= "txt_search">
					<button formtarget="frame" name="button" class="button"> Поиск</button>
					</div>	
					</form>
					<a href="#" class="korz" id="Korz">Корзина</a><br>	
					<a href="/Tov_no/viewTov.php?all" target="frame"  class="button">Весь каталог</a> <br>	
					<a href="#" class="korz" id="Korz">История заказов</a><br>
				</div>	
				
				<div class="block2">	
					<a href="	">Контакты для связи</a> <br>	
					<a href="/Документация/РЗП.pdf">Информация о сайте</a> <br>		
				</div>

				<div class="block3">	
					<a href="/index.html">Назад</a> <br>	
				</div>
			</nav>

		</div>
		<form action="/Tov_no/viewTov.php" method="GET">
		<div class="content">

			<div class="framee">	
				<div class="backk">	
		
				<a href="/glav/glav.php" class="back"><span></span></a>
		
				</div>
				
					<frameset cols="100%">
					<iframe src="/Tov_no/viewTov.php" class="frame" name="frame"> </iframe>
					</frameset>
					
			</div>
			
				
			<a class="button" target="frame" href="/Tov_no/viewTov.php?inst">
				<span> 
				<div  class="inst" id="box" >  <h1> Инструменты  </h1>	</div>
				</span>
			</a>		

			<a class="button" target="frame" href="/Tov_no/viewTov.php?tr">
				<span> 
				<div  class="tr" > <h1> Трубы </h1> </div>
				</span>
			</a>

			<a class="button" target="frame" href="/Tov_no/viewTov.php?sm">
				<span> 
				<div  class="sm" > <h1>Смесители и краны </h1>	</div>
				</span>
			</a>
			
			<a class="button" target="frame" href="/Tov_no/viewTov.php?van">
				<span> 
				<div  class="van" > <h1>Ванны </h1></div>
				</span>
			</a>
		
			<a class="button" target="frame" href="/Tov_no/viewTov.php?rak">
				<span> 
				<div  class="rak" > <h1>Раковины</h1> </div>
				</span>
				</a>

			<a class="button" target="frame" href="/Tov_no/viewTov.php?un">
				<span> 
				<div  class="un" > <h1>Унитазы	</h1></div>
				</span>
			</a>
		
			<a class="button" target="frame"  href="/Tov_no/viewTov.php?rs">
				<span> 
				<div  class="rs" > <h1> Расходные материалы	 </h1></div>	
				</span>
			</a>
						
	</div>
	</form>

	<div class="back_korz">
	<div class="korzina">
		<div class="korz_head">
		<p class="korz_title">Корзина  <?php echo  $_SESSION['Name'];?></p>
		<svg class="korz_exit" viewBox="0 0 32 32" >
		<g id="cross">
		<line class="cls-1" x1="7" x2="25" y1="7" y2="25"/>
		<line class="cls-1" x1="7" x2="25" y1="25" y2="7"/>
		</g></svg>
		</div>
		<?php
		
		$query = "SELECT *, Товары.Kol_vo as Koll FROM `Корзина` left join Товары on Товары.Id_Tov=Корзина.Id_Tov where id_Kl = '$res'";
		$posts = mysqli_query($link, $query);
		$num_rows = mysqli_num_rows($posts);
	?>
	<table border='1px'>
    <thead>
		<td class="none"></td>
        <td>Товар</td>
       	<td>Цена</td>
		<td>Количество</td>
		<td class="nonen">
		<form action='DeletKor.php' method='GET'> 
	 	<button class='submit' type='submit' onclick='return confirm("Вы действительно хотите очистить корзину?")'>Очистить</button>
	 	</form>
		</td>
    </thead>
     <?php
  for ($i = 0; $i < $num_rows; $i++) {
    while ($row = mysqli_fetch_array($posts, MYSQLI_ASSOC)) {
		
	echo "<tr id=".$row['Id_Kor'].">";
	echo " <td><form action='DeleteKor.php' method='GET'> 
	<input  type='hidden'  name='delete' value=" .$row['Id_Kor'].">
	 <button class='submit' type='submit' onclick='return confirm('Вы действительно хотите удалить?')'>Удалить</button>
	 </form></td>";
	echo "<td >".$row['Name']."</td>";
    echo "<td >".$row['Price']."</td>";
	echo "<td ><form action='add_zak.php' method='Post'> <select name='Kol_vo'>
				<option value='1'>1</option>
				<option value='2'>2</option>
				<option value='3'>3</option>
				<option value='4'>4</option>
				<option value='5'>5</option>
				<option value='6'>6</option>
				<option value='7'>7</option>
				<option value='8'>8</option>
				<option value='9'>9</option>
				<option value='10'>10</option>
  				</select></td>";
	echo "<td ><input  type='hidden'  name='Addd' value= ".$row['Id_Tov']."><input  type='hidden'  name='Adddd' value= ".$row['Price'].">
	<input  type='hidden'  name='Addddd' value= ".$row['Koll'].">
	<input  type='hidden'  name='Add' value= ".$row['Id_Kor']."><input class='submit' type='submit' value='Заказать'></form></td>";
	echo "</tr>";

    }
};
?>

	</div>
	</div>
			</div>
<script src="script.js"></script>

</body>
</html>