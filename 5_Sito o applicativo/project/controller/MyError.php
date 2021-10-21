<?php 

    class MyError extends Controller{

        function __construct(){
            parent::__construct();
            echo "classe error";
        }
        function index(){
            echo "funzione index error";
        }
    }
?>