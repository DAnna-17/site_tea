<!DOCTYPE html>
<html>
<head>
    <title>Сорта чая</title>
<link rel="stylesheet" type="text/css" href="style_web.css">
</head>
<body>

<div id="container">
	<div id="header" class = "center">
	<h1>
	Заказ чая
	</h1>
	<a href="admin.php">
                   <font  size="5">
                      Войти
                   </font></a>
	</div>
		 
	
		 
	<div id="sidebar">
	<h2 class = "center">levaya panel</h2>
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
	
	<form action="" method="post" class=classname>
    <tr>
        <td>Логин:</td>
        <td><input type="text" name="login"></td>
    </tr>

    <tr>
        <td>Пароль:</td>
        <td><input type="text" name="password"> </td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" value="insert"></td>
    </tr>
</form>
</table>
	
<?php

$link = mysqli_connect("localhost", "anna", "K2pc7qKPxfkkQ3n", "tea");

	

if (isset($_POST["login"])) {
	$t = 0;
	
	$sql = "SELECT * FROM admins";

	$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {
    if ($row['login'] == $_POST['login'] and $row['password'] == $_POST['password']){
		$t = 1;
	}
}		


    if ($t == 0) {
    print( "Неправильный логин или пароль");
} else {
	$sql = 'SELECT * FROM `orders`';

	$result = mysqli_query($link, $sql);

	while ($row = mysqli_fetch_array($result)) {
		print("Имя: " . $row['Name'] . "; Сорт:" . $row['Sort'] ."; Адрес:" . $row['Adress'] ."; Номер телефона:" . $row['Tel_number'] ."; Количество:" . $row['Kolvo'] . "<br>");
	}
}
}




?>

	
	</div>
		 
	<div id="clear">
		 
	</div>
							   
	<div id="footer">
	<h2>Проект Щукиной Анны</h2>
	</div>
</div>
</body>
</html>