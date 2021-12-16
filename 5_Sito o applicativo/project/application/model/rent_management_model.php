<?php 
    class Rent_Management_Model extends Model{
        function __construct(){
            parent::__construct();
        }
        function viewAllRent(){
            require 'application/config/connect.php';
            $final =array();
            $query = "SELECT book_id FROM rent WHERE user_id='".$_SESSION["id"]."'";
            $result = $conn->query($query);
            $booksId = array();
            while($rows = $result->fetch_assoc()){
                array_push($booksId,$rows);
            }
            $out =array();
            $out2 =array();
            for($i=0;$i<count($booksId);$i++){
                $query = "SELECT title FROM book WHERE id='".$booksId[$i]["book_id"]."'";
                $result = $conn->query($query);
                $row = $result->fetch_assoc();
                $out[] = $row;
            }
            $query = "SELECT start_date,end_date,book_id FROM rent WHERE user_id='".$_SESSION["id"]."'";
            $result = $conn->query($query);
            $row = $result->fetch_assoc();
            while($rows = $result->fetch_assoc()){
                array_push($out2,$rows);
            }
            for($i=0;$i<count($out2);$i++){
                $final[] = array("title" => $out[$i]["title"], "start_date" =>$out2[$i]["start_date"], "end_date" =>$out2[$i]["end_date"]);
            }
            return $final;
        }
    }