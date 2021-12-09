<?php 
    class Home_Rent_Model extends Model{
        function __construct(){
            parent::__construct();
        }
        function viewRent(){
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
        function doRent($id){
            require 'application/config/connect.php';
            if(is_int($id) && $id >= 30 && $id <= 90){
                echo ciao;
                $now = date(Y-m-d);
                $end = date_add($now,date_interval_create_from_date_string("$id days"));
                $query = "INSERT INTO rent(start_date,end_date,user_id,book_id) VALUES('$now','$end',".$_SESSION["id"].",$id)";
                $result = $conn->query($query);
                $row = $result->fetch_assoc();
            }
        }
    }