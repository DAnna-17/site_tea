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
	
	<table>
<form action="" method="post" class=classname>
    <tr>
        <td>name:</td>
        <td><input type="text" name="Name"></td>
    </tr>
<tr><td>

		 <select name="Sort" class=classname >
		 
		 
<option value=black>черный</option>
<option value=green>зеленый</option>
<option value=ulun>улун</option>
<option value=yellow>желтый</option>
<option value=white>белый</option>
		
</select></td>
</tr>
    <tr>
        <td>adress:</td>
        <td><input type="text" name="Adress" size="3"> </td>
    </tr>
    <tr>
        <td>tel number:</td>
        <td><input type="text" name="Tel_number" size="3"> </td>
    </tr>
    <tr>
        <td>kolvo:</td>
        <td><input type="text" name="Kolvo" size="3"> </td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" value="insert"></td>
    </tr>
</form>
</table>
<?php


$link = mysqli_connect("localhost", "anna", "K2pc7qKPxfkkQ3n", "tea");

	

if (isset($_POST["Name"])) {
	
	$sql1 = "SELECT id FROM orders";
	
	$res = mysqli_num_rows(mysqli_query($link, $sql1)) + 1;
  
    $sql = "INSERT INTO `orders` (`id`, `Name`, `Sort`, `Adress`, `Tel_number`, `Kolvo`) 
                        VALUES (".$res.", '".$_POST['Name']."', '".$_POST['Sort']."', '".$_POST['Adress']."', '".$_POST['Tel_number']."', '".$_POST['Kolvo']."')";
				
    if ($link->query($sql) === TRUE) {
    echo "Ваш заказ успешно добавлен";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
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