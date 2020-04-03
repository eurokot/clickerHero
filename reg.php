<?php	
//include('includes/db.php');

if(isset($_GET["back"])){
	header("Location: index.php");
}

?>

<html>
<head>
	<title>Регистрация</title>
	<link rel="stylesheet" type="text/css" href="css/reg.css">	
</head>
<body>
	<form class="box" action = "reg.php" method = "GET">
		<h1>Регистрация</h1>
		<input type="text" name="login" id="login" value="" placeholder="Логин">
		<input type="password" name="pwd" id="pwd" value="" placeholder="Пароль">
		<input type="submit" value="Зарегистрироваться" name="add" id="add"><br>
		<input type="submit" value="Назад" name="back" id="back">
	</form>
</body>
</html>