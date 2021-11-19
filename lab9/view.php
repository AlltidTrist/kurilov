<?php
$name="college";
$adress="localhost";
$login="dkurilov";
$pass="qSjR22";
$name1="dkurilov_college";

$link = mysqli_connect($adress,$login,$pass,$name1);
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully","<br>";


//$sposob2 = mysqli_query($link,"INSERT INTO college (fio, age, hobby) VALUES ('Петров Иван Андреевич', '19', 'Плавание')");
//$sposob3 ="INSERT INTO college (fio, age, hobby) VALUES ('Сергеев Андрей Иванович', '24', 'Чтение')";
//$sposob4 = mysqli_query($link,"INSERT INTO college SET fio = 'Курилов Даниил Иванович',age ='21',hobby = 'Футбол';");
$sposob5=
?>
