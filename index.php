<?php	
include('includes/db.php');

if(isset($_GET["go"])){
	$username = $_GET["login"];
	$password = $_GET["pwd"];

	if(!empty($username) and !empty($password)){
		$mysql_find =  "SELECT * FROM `login` WHERE `username` = '".$username."' and `password` = '".$password."';";
		$result = mysqli_query($connection, $mysql_find);
		$end = mysqli_fetch_assoc($result);
		if(!empty($end)){
			$good = 'Вы вошли успешно';
		}
		else{
			$alert = 'Вход не выполнен';
		}
	}
	else{
		$alert = 'Заполните все поля';
	}
}


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
		<p style="color: red"; font-weight: bold;><?php echo $alert?></p>
		<p style="color: green"; font-weight: bold;><?php echo $good?></p>
		<input type="text" name="login" id="login" value="" placeholder="Логин">
		<input type="password" name="pwd" id="pwd" value="" placeholder="Пароль">
		<input type="submit" value="Вход" name="go" id="go"><br>
		<input type="submit" value="Регистрация" name="reg" id="reg">
	</form>
</body>
</html>