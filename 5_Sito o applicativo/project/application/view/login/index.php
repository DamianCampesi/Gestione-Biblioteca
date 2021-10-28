<!DOCTYPE html>
<html>
	<head>
		<title>Log in</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div id="form">
			<form class="f" action="<?php echo URL ?>login/login" method="POST">
				<h1>LOG IN</h1>
				<span>Email:</span>
				<input type="email" name="email">
				<br>
				<span>Password:</span>
				<input type="password" name="password">
				<br>
				<input type="submit" name="submit" id="enter">
			</form>
			<p><a href="<?php echo URL ?>registration">Register</a></p>
		</div>
	</body>
</html>