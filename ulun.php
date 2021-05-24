<!DOCTYPE html>
<html>
<head>
    <title>Сорта чая</title>
<link rel="stylesheet" type="text/css" href="style_web.css">
</head>
<body>
<?php


$link = mysqli_connect("localhost", "anna", "K2pc7qKPxfkkQ3n", "tea");

$sql = 'SELECT * FROM `sorts` WHERE id=4';

$result = mysqli_query($link, $sql);
$row = mysqli_fetch_array($result);

echo'
<div id="container">
	<div id="header" class = "center">
	<h1>';

$result = mysqli_query($link, $sql);
		print($row['name']);
		
	echo'
	</h1>
	<a href="admin.php">
                   <font  size="5">
                      Войти
                   </font></a>
	</div>
		 
	
		 
	<div id="sidebar">
	<h2 class = "center">Сорта чая:</h2>
	<font size="5">
		<table class = "center">
			<tr><td>
				<a href="black.php">
                   <font  size="5">
                      Черный чай
                   </font></a>
			</tr></td>
			<tr><td>
                   <a href="green.php">
                   <font size="5">
                      Зеленый чай
                   </font></a>
			</tr></td>
			<tr><td>
                   <a href="white.php">
                   <font  size="5">
                    Белый чай
                   </font></a>
			</tr></td>
			<tr><td>
                   <a href="yellow.php">
                   <font  size="5">
                    Желтый чай
                   </font></a>
			</tr></td>
			<tr><td>
                   <a href="ulun.php">
                   <font  size="5">
                    Улун
                   </font></a>
			</tr></td>
			<tr><td>
                   <a href="insert.php">
                   <font  size="5">
                    Заказать
                   </font></a>
			</tr></td>
		</table>
	</div>

	<div class=main-panel>
	<h2 class = "h">Описание:</h2>
	<p>';
		print($row["description"]);
	echo'
	</p>
	<h2>Откуда:</h2>
	<p>';
		print($row['whence']);
	echo'
	</p></p>
	</div>
		 
	<div id="clear">
		 
	</div>
							   
	<div id="footer">
	<h2>Проект Щукиной Анны</h2>
	</div>
</div>';
?>
</body>
</html>