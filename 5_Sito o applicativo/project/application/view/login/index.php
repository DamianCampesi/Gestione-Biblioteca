
<form class="f" action="<?php echo URL ?>login/login" method="POST">
	<h1>Gestione Biblioteca</h1>
	<div class="formcontainer">
		<div class="container">
		<label for="mail"><strong>E-mail</strong></label>
		<input type="email" placeholder="Inserisci E-mail" name="email" required>
		<label for="psw"><strong>Password</strong></label>
		<input type="password" placeholder="Inserisci Password" name="password" required>
	</div>
	<button type="submit" name="submit" id="enter"><strong>Accedi</strong></button>
	<div class="container" style="background-color: #eee">
		<a href="<?php echo URL ?>registration">Non possiedi un account? Clicca qui per registrarti</a>
	</div>
</form>