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
<header>

	<img id="logo" src="img/logo.png">
	<h1>База оборудования</h1>
</header>
<main>
<?php
$connect = mysqli_connect($host,$name,$password,$db)
or die ("Ошибка" . mysqli_error($connect));

if (isset($_POST['name']) && (isset($_POST['serial'])))
{
	$name = htmlentities(mysqli_real_escape_string($connect,$_POST['name']));
	$serial = htmlentities(mysqli_real_escape_string($connect,$_POST['serial']));
	
	$query = "INSERT INTO SNR (name,serial) VALUES ('$name','$serial')";
	
	$result = mysqli_query($connect,$query)
	or die ("Ошибка" . mysqli_error($connect));
	
	
	mysqli_close($connect);
	echo "<script>document.location.href='index.php'</script>";
}
?>
	<article>
	<h1>Добавление SNR</h1>
	<form method="POST">
	<p>Модель: </p><input type="text" name="name" size="50" required />
	<p>Серийный номер: </p><input type="text" name="serial" size="50" required />
	<hr class='hr'>
	<button class="button" type="submit">Добавить</button>	
	</form>
                
	</article>
	<nav>
		
		
	</nav>
	<aside>
		
	</aside>
</main>
<footer>
<p id="footer">г.Благовещенск, ул.Политехническая, 144<br>
	   Работаем с 9:00 до 21:00 <br>
	   mail@gorodok1.ru <br>
</p>
</footer>



</body>
</html>