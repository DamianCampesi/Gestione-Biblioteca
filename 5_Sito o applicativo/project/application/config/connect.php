<?php 
	$db = "gestione_biblioteca";
	$user = "root";
	$password = "";
	$host = "localhost";
	$conn = new mysqli($host,$user,$password,$db);
	if (!$conn) {
  		die("Connection failed: " . mysqli_connect_error());
	}