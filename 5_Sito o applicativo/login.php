<?php 
	if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])){
		require('connect.php');
		if(isset($r)){
			unset($r);
			$email = $_POST["Remail"];
			$pw = $_POST["Rpassword"];
			$pw2 = $_POST["Rpassword2"];
			$email = validateEmail($email);
			$pw = validateString($pw);
			$pw2 = validateString($pw2);
			if($pw == $pw2){
				$query = "SELECT * FROM user where email='$email'";
				$result = $conn->query($query);
				$rows = $result->fetch_assoc();
				if($rows > 0){
					echo "account già registrato con questa mail";
				}else{
					$pw = password_hash($pw, PASSWORD_DEFAULT);
					$query = "INSERT INTO user(email,hash_password,is_librarian) VALUES('$email','$pw',0)";
					$result = $conn->query($query);
					$rows = $result->fetch_assoc();
					if($rows == 1){
						echo "Utente registrato corretttamente.";
					}
				}
			}
		}else{
			$email = $_POST["email"];
			$pw = $_POST["password"];
			
			//controlla i valori passati
			$email = validateEmail($email);
			$pw = validateString($pw);
	
			//query per login
			$query = "SELECT * FROM user where hash_password='$pw' AND email='$email'";
			$result = $conn->query($query);
			$rows = $result->fetch_assoc();
			if($rows > 0){
				var_dump($rows);
			}
		}
		
	}

	//funzioni di controllo	
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
?>