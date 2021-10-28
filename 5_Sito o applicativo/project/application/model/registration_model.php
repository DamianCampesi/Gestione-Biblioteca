<?php 
	class Registration_Model extends Model{
		function __construct(){
			parent::__construct();
		}
		function registration(){
			if(isset($_POST['Remail']) && isset($_POST['Rpassword'])){
				require 'application/config/connect.php';
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
						$this->msg = "Utente già registrato con questo indirizzo e-mail.";
						return false;
					}else{
						$pw = password_hash($pw, PASSWORD_DEFAULT);
						$query = "INSERT INTO user(email,hash_password,is_librarian) VALUES('".$email."','".$pw."',0)";
						$result = $conn->query($query);
						$query = "SELECT * FROM user where email='$email'";
						$createdUser = $conn->query($query);
						$rows = $createdUser->fetch_assoc();
						if($rows == 1){
							$this->msg = "Utente registrato correttamente.";
							return true;
						}
					}
				}else{
					$this->msg = "Le password non corrispondono.";
					return false;
				}
			}else{
				$this->msg = "Completare i campi.";
				return false;
			}
            
		}
	}
