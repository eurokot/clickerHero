<?php	
//include('includes/db.php');

if(isset($_GET["reg"])){
	header("Location: reg.php");
}

?>
<html>
<head>
	<title>Вход</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">	
</head>
<body>
	<form class="box" action = "index.php" method = "GET">
		<h1>Вход</h1>
		<input type="text" name="login" id="login" value="" placeholder="Логин">
		<input type="password" name="pwd" id="pwd" value="" placeholder="Пароль">
		<input type="submit" value="Вход" id="go"><br>
		<input type="submit" value="Регистрация" name="reg" id="reg">
	</form>
</body>
</html>