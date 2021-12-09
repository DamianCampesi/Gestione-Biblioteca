<?php 
	//funzioni di controllo	di stringhe e email
	function validateString($s){
		$s = stripslashes($s);
		$s = htmlspecialchars($s);
		return $s;
	}
	function validateEmail($e){
		$e =validateString($e);
		if(!filter_var($e, FILTER_VALIDATE_EMAIL)){
			$e = filter_var($e, FILTER_SANITIZE_EMAIL);
			return $e;
		}
		return $e;
	}