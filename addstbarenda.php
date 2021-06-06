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
	if (isset($_GET['id']))
	{
		$id = htmlentities($_GET['id']);
				
	echo "
	<article>
	<h1>Добавление SNR в аренду</h1>
	<form method='POST'>
	<p><input type='hidden' name='id' value='$id'></p>
	<p>Номер Договора: </p><input type='text' name='nomer' size='50' required />
	<p>Адрес: </p><input type='text' name='address' size='50' required />
	<hr class='hr'>
	<button class='button' type='submit'>Добавить</button>	
	</form>
    </article>";
	}
	
	if (isset($_POST['nomer']) && isset($_POST['address']) && isset($_POST['id']) )
	{
		$connect = mysqli_connect($host,$name,$password,$db)
		or die ("Ошибка" . mysqli_error($connect));
		
		$id = htmlentities($_GET['id']);
		$find_query = "SELECT * FROM STB WHERE id='$id'";
		$find = mysqli_query($connect,$find_query) or die ("Ошибка" . mysqli_error($connect));
		$find_row = mysqli_fetch_row($find);
		
		$name = $find_row[1];
		$serial = $find_row[2];
		$nomer = htmlentities(mysqli_real_escape_string($connect,$_POST['nomer']));
		$address = htmlentities(mysqli_real_escape_string($connect,$_POST['address']));
		
		$add = "INSERT INTO STB_ARENDA (name,serial,nomer,address) VALUES ('$name','$serial','$nomer','$address')";
		$result = mysqli_query($connect,$add) or die ("Ошибка" . mysqli_error($connect));
		
		$del = "DELETE FROM STB WHERE id = '$id'";
		$result_del = mysqli_query($connect,$del) or die ("Ошибка" . mysqli_error($connect));
		
		mysqli_close($connect);
		echo "<script>document.location.href='index.php'</script>";
	}
		
?>
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