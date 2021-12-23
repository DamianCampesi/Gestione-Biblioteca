<?php 
    class Home_Rent_Model extends Model{
        function __construct(){
            parent::__construct();
        }
        function viewRent(){
            require 'application/config/connect.php';
            $final =array();
            $query = "SELECT book.title, rent.start_date, rent.end_date FROM rent INNER JOIN book ON book.id = rent.book_id WHERE rent.user_id ='".$_SESSION["id"]. "';";
            $result = $conn->query($query);
            $out = array();
            while($rows = $result->fetch_assoc()){
                array_push($out,$rows);
            }
            return $out;
        }
        function doRent($id){
            $rentTime = $_POST["rentTime"];
            $rentTime = intval($rentTime);
            //echo gettype($id);
            filter_var($rentTime, FILTER_SANITIZE_NUMBER_INT);
            if($rentTime >=30 and $rentTime <=90){
                require 'application/config/connect.php';
                $now = new DateTime();
                $dayDiff = new DateInterval("P".$rentTime."D");
                $end = $now;
                $now = $now->format("Y-m-d");
                $end->add($dayDiff);
                $end = $end->format("Y-m-d");
                $query = "INSERT INTO rent(start_date,end_date,user_id,book_id) VALUES('$now','$end',".$_SESSION["id"].",$id)";
                $result = $conn->query($query);
                $query = "UPDATE book SET is_rented = 1 WHERE id=+".$id."";
                $result = $conn->query($query);
                $query = "SELECT * from rent WHERE user_id ='".$_SESSION["id"]."' AND book_id ='".$id."'";
                $result = $conn->query($query);
                if($row = $result->fetch_assoc() > 0){
                    return true;
                }
                return false;
            }
        }
    }