<!doctype html>
<html lang="en">
<head>


	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Login Form</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
	
	<link rel="stylesheet" href="style/css/base.css">
	<link rel="stylesheet" href="style/css/skeleton.css">
	<link rel="stylesheet" href="style/css/layout.css">
	
</head>
<body>
<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
	<div class="container">
		
		<div class="form-bg">
		<form action="cek_login.php" method="post">
			<form>
				<h2>Login</h2>
				<p><input type="text" name="username" placeholder="Username"></p>
				<p><input type="password" name="password" placeholder="Password"></p>
				<label for="remember">
				  <input type="checkbox" id="remember" value="remember" />
				  <span>Remember me on this computer</span>
				</label>
				<input type="submit" class="tombol_login" value="LOGIN">
			<form>
		</div>

	
		<p class="forgot">Forgot your password? <a href="">Click here to reset it.</a></p>


	</div>

	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
	<script>window.jQuery || document.write("<script src='js/jquery-1.5.1.min.js'>\x3C/script>")</script>
	<script src="js/app.js"></script>
	

</body>
</html>