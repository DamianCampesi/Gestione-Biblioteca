<?php 

class Login extends Controller{
    
    function __construct(){
        parent::__construct();
    }
    /**
     * Funzione di login
     */
    function index(){
        if(empty($_SESSION["id"])){
            $this->view->render(LOGINPAGE,1);
        }else{
            $this->view->render(HOMEPAGE,1);
        }
    }
    /**
     * Funzion che permette di effettuare il login
     */
    function login(){
        $this->model = new Login_Model();
        if($this->model->login()){
            $this->view->render(HOMEPAGE,1);
        }else{
            $this->view->render(LOGINPAGE,1);
           echo $this->model->msg;

        }
    }

}
