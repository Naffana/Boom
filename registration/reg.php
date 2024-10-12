<!DOCTYPE html>
<head>
<title>Регистрация</title>
<link rel="stylesheet" href="/reset.css" />
<link rel="stylesheet" href="reg_style.css" />
<script ENGINE="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="jquery.maskedinput.min.js"></script>
<meta charset="utf-8">
</head>
<body>

  <form action="Reg_post.php" method="Post">
		
		<div class="reg" align = "center"> Регистрация	</div>
  	<div class="div">
      <label class = "label">Придумайте логин:</label>
      <input type="text" class="text" name="Login">
     </div>
		<br>
		<div class="div">
      <label class = "label">Придумайте пароль:</label>
      <input type="text" class="text" name="password">
     </div>
		<br>
		<div class="div">
      <label class = "label">Введите фамилию:</label>
      <input type="text" class="text" name="Surname">
     </div>
		<br>
		<div class="div">
      <label class = "label">Введите имя:</label>
      <input type="text" class="text" name="Name">
     </div>
		<br>
		<div class="div">
      <label class = "label">Введите отчество:</label>
      <input type="text" class="text" name="Lastname">
    </div>
		<br>	
		<div class="div">
      <label class = "label">Введите адрес:</label>
      <input type="text" class="text" name="adress">
    </div>
		<br>
		<div class="div">
      <label class = "label">Введите почтовый индекс:</label>
      <input id="number"  type="text" class="text" name="indexx">
    </div>
		<br>
		<div class="div">
      <label class = "label">Введите номере телефона:</label>
      <input id="phone1" type="text" class="text" name="numberr">
    </div>
		<br>
		<div class="div1" align="center">
      <label class = "label">Укажите дату рождения:</label><br>	
      <input type="date" class="date" name="data">
     </div>
		<br>
  	</div>
		<div class="button">
    <a href="/index.html" class="knopka">назад</a>
   <input class="knopka" name="submit" type="submit" value="Зарегистрироваться">
		<!-- <input class="knopka" name="submit" type="submit" value="Зарегистрироваться"> -->
		</div> 
  </form>
  <script src="js.js"></script>
</body>
</html>