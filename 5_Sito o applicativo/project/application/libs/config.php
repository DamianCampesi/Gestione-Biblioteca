<?php 

    define('DB',"gestione_biblioteca");

	define('USER',"root");

	define('PASSWORD',"");

	define('HOST',"localhost");

	//da spostare in  un model
    $conn = new mysqli(HOST,USER,PASSWORD,DB);
	
    if (!$conn) {
  		die("Connection failed: " . mysqli_connect_error());
	}
 ?>