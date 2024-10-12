
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
					<a href="/index.html" id="text" class="a">Войти</a>
				</div>

				<div class="block1">
				<form action="Search.php" name="qwe" method="POST">
					<div class="search"> 
					<input type = 'text' name='query' placeholder="поиск" class= "txt_search">
					<button formtarget="frame" name="button" class="button"> Поиск</button>
					</div>	
					</form>		
					<a href="/Tov_g/viewTov.php?all" target="frame"  class="button">Весь каталог</a> <br>
				<div class="block2">	
					<a href="	">Контакты для связи</a> <br>	
					<a href="/Документация/РЗП.pdf">Информация о сайте</a> <br>	
					<a href="	">Информация о создателе</a> <br>	
				</div>

				<div class="block3">	
					<a href="/index.html">Назад</a> <br>	
				</div>
			</nav>

		</div>

		<div class="content">

			<div class="framee">	
				<div class="backk">	
		
				<a href="#" class="back"><span></span></a>
		
				</div>
					<frameset cols="100%">
					<iframe src="/Tov_g/viewTov.php" class="frame" name="frame"> </iframe>
					</frameset>
					
			</div>
			
			<div class="framee1">	
				<div class="backk1">	
		
				<a href="#" class="back1"><span></span></a>
		
				</div>
					<frameset cols="100%">
					<iframe src="/ViewKlienty.php" class="frame1" name="frame1"> </iframe>
					</frameset>
					
				</div>
				 
				<a class="button" target="frame" href="/Tov_g/viewTov.php?inst">
				<span> 
				<div  class="inst" id="box" >  <h1> Инструменты  </h1>	</div>
				</span>
			</a>		

			<a class="button" target="frame" href="/Tov_g/viewTov.php?tr">
				<span> 
				<div  class="tr" > <h1> Трубы </h1> </div>
				</span>
			</a>

			<a class="button" target="frame" href="/Tov_g/viewTov.php?sm">
				<span> 
				<div  class="sm" > <h1>Смесители и краны </h1>	</div>
				</span>
			</a>
			
			<a class="button" target="frame" href="/Tov_g/viewTov.php?van">
				<span> 
				<div  class="van" > <h1>Ванны	 </h1></div>
				</span>
			</a>
		
			<a class="button" target="frame" href="/Tov_g/viewTov.php?rak">
				<span> 
				<div  class="rak" > <h1>Раковины</h1> </div>
				</span>
				</a>

			<a class="button" target="frame" href="/Tov_g/viewTov.php?un">
				<span> 
				<div  class="un" > <h1>Унитазы	</h1></div>
				</span>
			</a>
		
			<a class="button" target="frame"  href="/Tov_g/viewTov.php?rs">
				<span> 
				<div  class="rs" > <h1> Расходные материалы	 </h1></div>	
				</span>
			</a>
	</div>
	
	

	</div>
<!-- -->

<script src="script.js"></script>

</body>
</html>