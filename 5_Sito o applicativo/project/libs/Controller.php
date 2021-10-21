<?php 

    class Controller{

        function __construct(){
            //debug
            echo "main controller";

            $this->view = new View();
            //$this->model = new Model();
        }

        function render($name){
            require '/../view/'.$name.'php';
        }

    }

?>