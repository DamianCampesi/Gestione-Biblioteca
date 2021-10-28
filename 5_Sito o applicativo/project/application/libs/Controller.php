<?php 

    class Controller{

        function __construct(){
            $this->view = new View();
            $this->model = new Model();
        }

    }

?>