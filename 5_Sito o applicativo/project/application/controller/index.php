<?php 
    class Index extends Controller{
        function __construct(){
            parent::__construct();
        }
        function index(){
            if(empty($_SESSION["id"])){
                $this->view->render(LOGINPAGE,1);
            }else{
                $this->view->render(HOMEPAGE,1);
            }
        }
    }