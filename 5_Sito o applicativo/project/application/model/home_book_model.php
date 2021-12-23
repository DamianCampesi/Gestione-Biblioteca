<?php 
    class Home_Book_Model extends Model{
        function __construct(){
            parent::__construct();
        }
        function viewBooks(){
            require 'application/config/connect.php';
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                $search = trim(validateString($_POST["searchBooks"]));
                $filter = validateString($_POST["filterSelect"]);
            }
            if(!empty($search)){
                if($filter == "title"){
                    $query = "SELECT * FROM book WHERE title LIKE '%".$search."%' AND is_rented = 0";
                    $result = $conn->query($query);
                    $out = array();
                    while($rows = $result->fetch_assoc()){
                        array_push($out,$rows);
                    }
                    return $out;
                }elseif($filter == "author"){
                    $query = "SELECT * FROM book WHERE author LIKE '%".$search."%' AND is_rented = 0";
                    $result = $conn->query($query);
                    $out = array();            
                    while($rows = $result->fetch_assoc()){
                        array_push($out,$rows);
                    }
                    return $out;
                }
            }else{
                $query = "SELECT * FROM book WHERE is_rented = 0";
                $result = $conn->query($query);
                $out = array();            
                while($rows = $result->fetch_assoc()){
                    array_push($out,$rows);
                }
                return $out;
            }
            $query = "SELECT * FROM book";
            $result = $conn->query($query);
            $out = array();            
            while($rows = $result->fetch_assoc()){
                array_push($out,$rows);
            }
            return $out;
        }
        function viewBook($id){
            require 'application/config/connect.php';
            $query = "SELECT * FROM book WHERE id = '".$id."'";
            $result = $conn->query($query);
            $out = array();
            while($rows = $result->fetch_assoc()){
                array_push($out,$rows);
            }
            return $out;
        }

        function deleteBook($id){

        }
    }