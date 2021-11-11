<?php 
    class Home_Book_Model extends Model{
        function __construct(){
            parent::__construct();
        }
        function viewBooks(){
            $query = "SELECT * FROM book";
            $result = $conn->query($query);
            $rows = $result->fetch_assoc();
            return $rows;
        }
    }