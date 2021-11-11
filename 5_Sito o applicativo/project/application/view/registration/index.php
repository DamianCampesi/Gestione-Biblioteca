<!DOCTYPE html>
<html>
	<head>
		<title>Log in</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
	<form class="f" action="<?php echo URL ?>registration/registration" method="POST">
      		<h1>Gestione Biblioteca</h1>
      		<div class="formcontainer">
      			<div class="container">
        		<label for="mail"><strong>E-mail</strong></label>
        		<input type="email" placeholder="Inserisci E-mail" name="Remail" required>
        		<label for="psw"><strong>Password</strong></label>
        		<input type="password" placeholder="Inserisci Password" name="Rpassword" required>
				<label for="psw"><strong>Ripeti password</strong></label>
        		<input type="password" placeholder="Inserisci Password" name="Rpassword2" required>
      		</div>
    		<button type="submit" name="Rsubmit" id="enter"><strong>Accedi</strong></button>
      		<div class="container" style="background-color: #eee">
				<a href="<?php echo URL ?>login">Clicca qui per effettuare il login</a>
      		</div>
    	</form>
	</body>
</html>