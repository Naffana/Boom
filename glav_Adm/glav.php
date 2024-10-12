<?php
session_start();
include 'Connect.php';
$name = $_SESSION['Name'];
?>
<!DOCTYPE html>
<html>	
<head>
    <meta charset="utf-8">
    <title>Главная</title>
	 <link rel="stylesheet" href="/reset.css" />
    <link rel="stylesheet" href="/glav/glav_style.css" />
	<script ENGINE="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
	
	<div class="wrap">	
		<div class="menu">	
			<a href="#"  class="menu-btn" ><span></span></a>
			<nav class="menu-list">
				<div class="block">
					<!-- <input class="aa" type="submit" name="name" value="$name"> -->
					<label>Режим администрирования!</label>
					<label>Администратор - <?php echo $name;?></label>
				</div>

				<div class="block1">
				<form action="Search.php" name="qwe" method="POST">
					<div class="search"> 
					<input type = 'text' name='query' placeholder="поиск" class= "txt_search">
					<button formtarget="frame" name="button" class="button"> Поиск</button>
					</div>	
					</form>	
					
					<a target="frame"  href="/Tov/viewTov.php?all" class="button" >Весь каталог</a> <br>	
					<a href="#" class="zak" id="Zak" >Заказы</a> <br>
				</div>	

				<div class="block2">	
					<a href="	">Контакты для связи</a> <br>	
					<a href="/Документация/РЗП.pdf">Информация о сайте</a> <br>	
					<a href="	">Информация о создателе</a> <br>	
				</div>

				<div class="block3">	
					<a href="/index.html">Назад</a> <br>	
					<a href="#" class="button1">Просмотр клиентов</a>
				</div>
			</nav>

		</div>
		<form action="/Tov/viewTov.php" method="GET">
		<div class="content">

			<div class="framee">	
				<div class="backk">	
		
				<a href="#" class="back"><span></span></a>
		
				</div>
					<frameset cols="100%">
					<iframe src="/Tov/viewTov.php" class="frame" name="frame"> </iframe>
					</frameset>
					
			</div>
			
			<div class="framee1">	
				<div class="backk1">	
		
				<a href="#" class="back1"><span></span></a>
		
				</div>
					<frameset cols="100%">
					<iframe src="/Klienty/ViewKlienty.php" class="frame1" name="frame1"> </iframe>
					</frameset>
					
				</div>
			<a class="button" target="frame" href="/Tov/viewTov.php?inst">
				<span> 
				<div  class="inst" id="box" >  <h1> Инструменты  </h1>	</div>
				</span>
			</a>		

			<a class="button" target="frame" href="/Tov/viewTov.php?tr">
				<span> 
				<div  class="tr" > <h1> Трубы </h1> </div>
				</span>
			</a>

			<a class="button" target="frame" href="/Tov/viewTov.php?sm">
				<span> 
				<div  class="sm" > <h1>Смесители и краны </h1>	</div>
				</span>
			</a>
			
			<a class="button" target="frame" href="/Tov/viewTov.php?van">
				<span> 
				<div  class="van" > <h1>Ванны	 </h1></div>
				</span>
			</a>
		
			<a class="button" target="frame" href="/Tov/viewTov.php?rak">
				<span> 
				<div  class="rak" > <h1>Раковины</h1> </div>
				</span>
				</a>

			<a class="button" target="frame" href="/Tov/viewTov.php?un">
				<span> 
				<div  class="un" > <h1>Унитазы	</h1></div>
				</span>
			</a>
		
			<a class="button" target="frame"  href="/Tov/viewTov.php?rs">
				<span> 
				<div  class="rs" > <h1> Расходные материалы	 </h1></div>	
				</span>
			</a>
				
	</div>
	</form> 
	<div class="back_korz">
	<div class="korzina">
		<div class="korz_head">
		<p class="korz_title">Заказы</p>
		<svg class="korz_exit" viewBox="0 0 32 32" >
		<g id="cross">
		<line class="cls-1" x1="7" x2="25" y1="7" y2="25"/>
		<line class="cls-1" x1="7" x2="25" y1="25" y2="7"/>
		</g></svg>
		</div>
		<?php
		
		$query = "SELECT * from zak";
		$posts = mysqli_query($link, $query);
		$num_rows = mysqli_num_rows($posts);
		
    	echo "<table border='1px'>";
    ?>
    <thead>
		
       	<td>Имя</td>
		<td>Адрес доставки</td>
		<td>Номер телефона</td>
		<td>Товар</td>
		<td>Кол-во</td>
		<td>К оплате</td>
		<td class="nonen">
		<form action='DeletZak.php' method='GET'> 
	 	<button class='submit' type='submit' onclick='return confirm("Вы действительно хотите всё очистить?")'>Очистить</button>
	 	</form>
		</td>
    </thead>
	 <?php
  for ($i = 0; $i < $num_rows; $i++) {
    while ($row = mysqli_fetch_array($posts, MYSQLI_ASSOC)) {
		
	echo "<tr id=".$row['Id_Ord'].">";
	echo "<td >".$row['Kname']."</td>";
	echo "<td >".$row['adress']."</td>";
	echo "<td >".$row['Numberr']."</td>";
	echo "<td >".$row['Tname']."</td>";
	echo "<td >".$row['Kol_vo']."</td>";
	echo "<td >".$row['oplata']."</td>";
	echo " <td><form action='DeleteZak.php' method='GET'> 
	<input type='hidden'  name='delete' value=" .$row['Id_Ord'].">
	 <button class='submit' type='submit' onclick='return confirm('Вы действительно хотите удалить?')'>Удалить</button>
	 </form></td>";
	echo "</tr>";
 
    }
};

?>
	<form action='Excel.php' method='GET'> 
	 <button class='submit' type='submit'>Отчет в эксель</button>
	 </form>
	</div>
	</div>

	</div> 
<script src="script.js"></script>

</body>
</html>