<?php 
$pdo = new pdo('mysql:host=localhost;dbname=BOOM','root');

$Klienty = "CREATE table Клиенты
(
id_Kl int AUTO_INCREMENT Primary Key,
Login varchar(40) NOT NULL,
Password varchar(40) NOT NULL,
Admin bit not null default 0,
Surname varchar(40) NOT NULL,
Name varchar(40) NOT NULL,
Lastname varchar(40) NOT NULL,
Adress varchar(40) NOT NULL,
Indexx int NOT NULL,
Numberr varchar(40),
Data_r date NOT NULL,
CONSTRAINT Numbar check (Numberr LIKE '+375([0-9][0-9])[0-9][0-9][0-9]-[0-9][0-9]-[0-9][0-9]')
)";

$pdo -> exec($Klienty);

$Type = "CREATE table Тип_товара
(
Id_type int AUTO_INCREMENT Primary Key,
Type varchar(40)
)";

$pdo -> exec($Type);

$Tov = "CREATE table Товары 
(
Id_tov int AUTO_INCREMENT Primary Key,
Name varchar(40) NOT NULL,
Id_type int not null ,
Price int NOT NULL,
Kol_vo int NOT NULL check (Kol_vo > 0),
Marka varchar(40) NOT NULL,
Desk varchar(255) Not null,
Imgg varchar(60) not null,
CONSTRAINT fk_type FOREIGN KEY (Id_type) REFERENCES Тип_товара(Id_type) on delete cascade
)";

$pdo -> exec($Tov);

$Dost = "CREATE table Доставка 
(
Id_dost int AUTO_INCREMENT Primary Key,
Name varchar(40) not null,
Numberr varchar(40) not null,
Price_dost int  not null check (Price_dost > 0.5),
CONSTRAINT Numbar check (Numberr LIKE '+375([0-9][0-9])[0-9][0-9][0-9]-[0-9][0-9]-[0-9][0-9]')
)";

$pdo -> exec($Dost);

$Ord = "CREATE table Заказы
(
Id_Ord int AUTO_INCREMENT Primary Key,
Id_Kl int not null,
Id_dost int not null,
Name varchar(40) not null,
Surname varchar(40) not null, 
Lastname varchar(40) not null,
Adress varchar(40) not null,
CONSTRAINT fk_Ord foreign key (Id_Kl) REFERENCES Клиенты(Id_Kl) ON DELETE CASCADE,
CONSTRAINT fk_Ord1 foreign key (Id_dost) REFERENCES Доставка(Id_dost) ON DELETE CASCADE
)";

$pdo -> exec($Ord);

$Kor = "CREATE table Корзина
(
Id_Kor int AUTO_INCREMENT Primary Key,
Id_Ord int NOT NULL,
Id_Tov int NOT NULL,
Price int not null check (Price > 0.5),
Kol_vo int not null check (Kol_vo > 0.5),
CONSTRAINT fk_Kor FOREIGN KEY (Id_Ord) references Заказы(Id_Ord) ON DELETE CASCADE,
CONSTRAINT fk_Kor1 foreign key (Id_Tov) REFERENCES Товары(Id_Tov) ON DELETE CASCADE
)";

$pdo -> exec($Kor);

echo '<script>location.replace("index.html");</script>';
?>