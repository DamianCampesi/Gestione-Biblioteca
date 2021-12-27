<?php 
    class Index extends Controller{
        function __construct(){
            parent::__construct();
        }
        /**
         * Funzione di index che renderizza il login o la homepage a dipendenza se si è loggat o no.
         * Questa funzione viene utilizzata di default in caso il controller non sia specificato nell'URL
         */
        function index(){
            if(isset($_SESSION["id"])){
                $this->view->render(HOMEPAGE,1);
            }else{
                $this->view->render(LOGINPAGE,1);
            }
        }
    }