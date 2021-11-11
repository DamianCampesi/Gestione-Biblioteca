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
                $query = "SELECT hash_password FROM user where email='".$email."'";
                $result = $conn->query($query);
                $rows = $result->fetch_assoc();
                if($rows > 0 && password_verify($pw,$rows['hash_password'])){
                    //informazioni sull'utente che ha effettuato l'accesso
                    $query = "SELECT * FROM user where email='".$email."'";
                    $result = $conn->query($query);
                    $rows = $result->fetch_assoc();
                    $_SESSION["id"] = $rows['id'];
                    $_SESSION["email"] = $rows['email'];
                    $_SESSION["is_librarian"] = $rows['is_librarian'];
                    return true;
                }else{
                    session_destroy();
                    $this->msg="Nome utente o password non corretti.";
                    return false;
                }
            }else{
                session_destroy();
                $this->msg = "Completare i campi.";
				return false;
            }

        }
    }