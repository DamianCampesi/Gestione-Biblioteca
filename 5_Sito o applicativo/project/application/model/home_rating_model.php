<?php 
    class Home_Rating_Model extends Model{
        function __construct(){
            parent::__construct();
        }
        function viewRating(){
            require 'application/config/connect.php';
            $query = "SELECT book.title, book.cover_image, ROUND(AVG(rating.valutazione),1) as media from rating INNER JOIN book ON book.id = rating.book_id GROUP BY book.id;";
            $result = $conn->query($query);
            $out = array();
            while($rows = $result->fetch_assoc()){
                array_push($out,$rows);
            }
            return $out;
        }
    }