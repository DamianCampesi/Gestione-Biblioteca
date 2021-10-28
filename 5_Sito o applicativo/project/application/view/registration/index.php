<!DOCTYPE html>
<html>
	<head>
		<title>Log in</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div id="form">
			<form class="f" action="<?php echo URL ?>registration/registration" method="POST">
				<h1>REGISTRAZIONE</h1>
				<span>Email:</span>
				<input type="email" name="Remail">
				<br>
				<span>Password:</span>
				<input type="password" name="Rpassword">
				<br>
				<span>Repeat password:</span>
				<input type="password" name="Rpassword2">
				<br>
				<input type="submit" name="submit" value="Register" id="enter">
			</form>
			<p><a href="<?php echo URL ?>login">Register</a></p>
		</div>

	</body>
</html>