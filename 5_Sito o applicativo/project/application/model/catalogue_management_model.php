<?php 
    class Catalogue_Management_Model extends Model{
        function __construct(){
            parent::__construct();
        }
        function viewBooks(){
            require 'application/config/connect.php';
            $query = "SELECT * FROM book";
            $result = $conn->query($query);
            $out = array();            
            while($rows = $result->fetch_assoc()){
                array_push($out,$rows);
            }
            return $out;
        }
        function addBook(){
            
        }   
        function removeBook(){

        } 
    }