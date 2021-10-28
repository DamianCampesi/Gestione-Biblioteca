<?php 
    class Home extends Controller{
        function __construct(){
            parent::__construct();
        }
        function index(){
            if(empty($_SESSION['id'])){
                $this->view->render(LOGINPAGE);
            }else{
                $this->view->render(HOMEPAGE);
            }
        }
    }