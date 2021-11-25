<?php 
    class Home_Rent_Model extends Model{
        function __construct(){
            parent::__construct();
        }
        function viewRent(){
            require 'application/config/connect.php';
            $query = "SELECT book_id FROM rent WHERE user_id='".$_SESSION["id"]."'";
            $result = $conn->query($query);
            $booksId = array();
            while($rows = $result->fetch_assoc()){
                array_push($booksId,$rows);
            }
            $out =array();
            for($i=0;$i<count($booksId);$i++){
                $query = "SELECT title FROM book WHERE id='".$booksId[$i]["book_id"]."'";
                $result = $conn->query($query);
                $row = $result->fetch_assoc();
                $out[] = $row;
            }
            return $out;
        }
    }