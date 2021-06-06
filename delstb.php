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
	<article>
<?php 
	if (isset($_GET['id']))
	{$id = htmlentities($_GET['id']); 
	echo" <h1>Точно удалить STB?</h1>
	<form method='POST'>
	<input type='hidden' name='id' value='$id'/>
	<input type='submit' class='button' id='delButton' value='Удалить'>
	</form>";
    }
	
	if (isset($_POST['id']))
	{
	$connect = mysqli_connect($host,$name,$password,$db)
	or die ("Ошибка" . mysqli_error($connect));
	
	$id = mysqli_real_escape_string($connect,$_POST['id']);
	
	$query = "DELETE FROM STB WHERE id='$id'";
	
	$result = mysqli_query($connect,$query)
	or die ("Ошибка". mysqli_error($connect));
	
	mysqli_close($connect);
	
	echo "<script>document.location.href='index.php'</script>";
	}
?>	
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