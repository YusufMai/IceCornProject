<?php
	session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="background" style="background-image: url(wll.png); width: 100%; height: 100vh;">
	<header>
		<a href="Loging.php" style="float: right;">Logout</a>
	</header>
	<div>
		<h1 style="font-style: sans-serif; color: #0000ff">Computer Science</h1>
	</div>
</div>
	
</body>
</html>