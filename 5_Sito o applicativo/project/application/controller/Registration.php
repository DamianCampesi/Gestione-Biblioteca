<?php 
    class Registration extends Controller{

        function __construct(){
            parent::__construct();
        }
        function index(){
            $this->view->render(REGISTRATIONPAGE,1);
        }
        /**
         * Funzione che permette la registrazione di un utente.
         */
        function registration(){
            $this->model = new Registration_Model();
            if($this->model->registration()){
                $this->view->render(REGISTRATIONPAGE,1);
                echo $this->model->msg;
            }else{
                $this->view->render(REGISTRATIONPAGE,1);
                echo $this->model->msg;
            }
        }
    }