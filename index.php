<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="view" content="width=device-width">
	<title>База оборудования</title>
	<link rel="stylesheet" href="style/style.css">
</head>
<body>
<!--Верхняя панель -->
<header>
	<img id="logo" src="img/logo.png">
	<h1>База оборудования</h1>
</header>
<!--Основная панель -->
<main>
	<article>
<!--Div с ошибкой -->
	<div id="warning">
	</div>
<!--Div с SNR -->
	<div id="SNR">
	<h1>SNR в наличии</h1>
<!--PHP скрипт отображения SNR в наличии -->
<?php
$connect = mysqli_connect($host,$name,$password,$db)
or die ("Ошибка" . mysqli_error($connect));

$query = "SELECT * FROM SNR";

$result = mysqli_query($connect,$query)
or die ("Ошибка" . mysqli_error($connect));

if ($result)
{
	$rows = mysqli_num_rows($result);
	
	echo "<ol>";
	for ($i=0; $i<$rows;$i++)
	{
		$row = mysqli_fetch_row($result);
		echo "		
		<li>Модель: <b>$row[1]</b> , S/N: <b>$row[2]</b>
		<input name='snr' class='radio' type='radio' value=$row[0] />
		</li>		
		<hr>";		
	}
	echo "</ol>";
	echo "<hr class='hr'>";
	mysqli_free_result($result);
}
mysqli_close($connect);
?>
    </div>
<!--Div с SNR аренда -->
<div id="SNR_ARENDA">
	<h1>SNR в аренде</h1>
<!--PHP скрипт отображения SNR в аренде -->
<?php
$connect = mysqli_connect($host,$name,$password,$db)
or die ("Ошибка" . mysqli_error($connect));

$query = "SELECT * FROM SNR_ARENDA";

$result = mysqli_query($connect,$query)
or die ("Ошибка" . mysqli_error($connect));

if ($result)
{
	$rows = mysqli_num_rows($result);
	
	echo "<ol>";
	for ($i=0; $i<$rows;$i++)
	{
		$row = mysqli_fetch_row($result);
		echo "		
		<li>Модель: <b>$row[1]</b> , S/N: <b>$row[2]</b>,<br> Номер Договора: <b>$row[3]</b>,
		Адрес: <b>$row[4]</b>
		<input name='snr_arenda' class='radio' type='radio' value=$row[0] />
		</li>		
		<hr>";		
	}
	echo "</ol>";
	mysqli_free_result($result);
}
mysqli_close($connect);
?>
    </div>
<!--Div с STB -->	
	<div id="STB">
	<h1>STB в наличии</h1>
<!--PHP скрипт отображения STB в наличии -->
<?php
$connect = mysqli_connect($host,$name,$password,$db)
or die ("Ошибка" . mysqli_error($connect));

$query = "SELECT * FROM STB";

$result = mysqli_query($connect,$query)
or die ("Ошибка" . mysqli_error($connect));

if ($result)
{
	$rows = mysqli_num_rows($result);
	echo "<ol>";
	for ($i=0; $i<$rows;$i++)
	{
		$row = mysqli_fetch_row($result);
		echo "<li>Модель: <b>$row[1]</b> , S/N: <b>$row[2]</b>
		<input name='stb' class='radio' type='radio' value=$row[0]>
		</li>
		<hr>";
	}
	echo "</ol>";
	echo "<hr class='hr'>";
	mysqli_free_result($result);
}
mysqli_close($connect);
?>
    </div> 
<!--Div с STB аренда -->	
	<div id="STB_ARENDA">
	<h1>STB в аренде</h1>
<!--PHP скрипт отображения STB в аренде -->
<?php
$connect = mysqli_connect($host,$name,$password,$db)
or die ("Ошибка" . mysqli_error($connect));

$query = "SELECT * FROM STB_ARENDA";

$result = mysqli_query($connect,$query)
or die ("Ошибка" . mysqli_error($connect));

if ($result)
{
	$rows = mysqli_num_rows($result);
	echo "<ol>";
	for ($i=0; $i<$rows;$i++)
	{
		$row = mysqli_fetch_row($result);
		echo "<li>Модель: <b>$row[1]</b> , S/N: <b>$row[2]</b>,<br> Номер Договора: <b>$row[3]</b>,
		Адрес: <b>$row[4]</b>
		<input name='stb_arenda' class='radio' type='radio' value=$row[0] />
		</li>		
		<hr>";
	}
	echo "</ol>";
	mysqli_free_result($result);
}
mysqli_close($connect);
?>
    </div> 
	
	</article>
<!--Левая панель -->
	<nav>
		<img src="img/route.png" id="routeImg">
		<a class="links" id="SnrButton">SNR</a>
		<a class="links" id="StbButton">STB </a>
		<img src="img/tv.png" id="tvImg">
	</nav>
<!--Правая панель -->
	<aside>
		<div id="Buttons">
		<div id="ButtonsInArenda">
		<p><button class="button" id="AddButton">Добавить</button></p>
		<p><button class="button" id="DelButton">Удалить</button></p>
		</div>
		<div id="ButtonsFromArenda">
		<p><button class="button arenda" id="ArendaButton">Добавить в аренду</button></p>
		<p><button class="button arenda" id="DelArendaButton">Убрать из аренды</button></p>
		</div>
		</div>
		
	</aside>
</main>
<!--Футер -->
<footer>
<p id="footer">г.Благовещенск, ул.Политехническая, 144<br>
	   Работаем с 9:00 до 21:00 <br>
	   mail@gorodok1.ru <br>
</p>
</footer>
<script src="js/js.js"></script>
</body>
</html>