<?php 
    class MyError extends Controller{

        function __construct(){
            parent::__construct();
        }
        /**
         * Funzione che viene usata quando il controller specificato nell'URL non esistes
         */
        function index(){
            $this->view->render(ERRORPAGE,1);
        }
    }