<?php 
    class Home_Rating_Model extends Model{
        function __construct(){
            parent::__construct();
        }
        function viewRating(){
            require 'application/config/connect.php';
            $query = "SELECT book_id,valutazione FROM rating";
            $result = $conn->query($query);
            $booksId = array();
            while($rows = $result->fetch_assoc()){
                array_push($booksId,$rows);
            }
            $out = array();
            for($i=0;$i<count($booksId);$i++){
                $query = "SELECT title FROM book WHERE id='".$booksId[$i]["book_id"]."'";
                $result = $conn->query($query);
                $row = $result->fetch_assoc();
                $out[] = array("title" => $row["title"], "valutazione" =>$booksId[$i]["valutazione"]);
            }
            return $out;
        }
    }