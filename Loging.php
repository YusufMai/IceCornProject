<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Loging</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container" style="background-image: url(wll.png)">
		<div class="card">
			<div class="inner-box" id="card">
				<div class="card-front" style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.6))">

				<h2>LOGIN</h2>
				<form>
					<input type="text" class="input-box" placeholder="USERNAME" required>
					<input type="password" class="input-box" placeholder="PASSWORD" required><br><br>
					<button type="submit" class="bton"><a href="index.php">Sign in</a></button>
					<input type="checkbox"><span>Remember Me</span>
				</form>
				<button type="button" class="btn" onclick="openRegister()">Sign up</button>
				<a href="">Forgot Password</a>
				</div>

				<div class="card-back" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6))">
					<h2>REGISTER</h2>
				<form>
					<input type="text" class="input-box" placeholder="Full Name" required>
					<input type="phone" class="input-box" placeholder="Phone No" required>
					<input type="email" class="input-box" placeholder="Email" required>
					<input type="password" class="input-box" placeholder="Create Password" required>
					<input type="submit" class="login" value="Submit">
				</form>
				<button type="button" class="btn" onclick="openLogin()">I've an account</button>
				</div>
			</div>
		</div>
	</div>

	<script>
		var card = document.getElementById("card");

		function openRegister(){
			card.style.transform = "rotateY(-180deg)";
		}
		function openLogin(){
			card.style.transform = "rotateY(0deg)";
		}
	</script>
</body>
</html>