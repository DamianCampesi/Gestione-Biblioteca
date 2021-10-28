<?php 
    session_start();
    class Login_Model extends Model{
        function __construct(){
            parent::__construct();
        }
        function login(){
            if(!empty($_POST['email']) && !empty($_POST['password'])){
                require 'application/config/connect.php';
                $email = $_POST["email"];
                $pw = $_POST["password"];
                
                //controlla i valori passati
                $email = validateEmail($email);
                $pw = validateString($pw);
        
                //query per login
                $query = "SELECT password_hash FROM user where email='".$email."'";
                $result = $conn->query($query);
                $rows = $result->fetch_assoc();
                //problema da risolvere------
                var_dump($rows);
                if($rows > 0 && password_verify(password_hash($pw),$rows)){
                    $_SESSION["id"] = $rows['id'];
                    $_SESSION["user"] = $rows['email'];
                    $this->msg = "Utente loggato correttamente";
                    return true;
                }else{
                    $this->msg="Nome utente o password non corretti.";
                    return false;
                }
            }else{
                $this->msg = "Completare i campi.";
				return false;
            }

        }
    }