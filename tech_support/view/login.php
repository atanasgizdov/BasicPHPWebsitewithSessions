<?php
include '../view/header.php';
include '../model/login.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Login Form in PHP with Session</title>
		<link href="../main.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div id="main" align = "center">
		<h1>Please Log in</h1>
		<div id="login">
		<h2 id = "aligned">Login Form</h2>
		<form action=""../index.php"" method="post">
		<label>Username :</label>
		<input id="name" name="username" placeholder="Username" type="text">
		<label>Password :</label>
		<input id="password" name="password" placeholder="**********" type="Password">
		
		<input name="submit" type="submit" id = "aligned" value ="Login">
		
		</form>
		</div>
		</div>
	</body>
</html>
<?php 
include '../view/footer.php';
?>