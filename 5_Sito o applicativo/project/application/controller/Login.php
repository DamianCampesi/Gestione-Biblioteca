<?php 

class Login extends Controller{

    function __construct(){
        parent::__construct();
    }
    function index(){
        $this->view->render(LOGINPAGE,1);
    }
    function login(){
        $this->model = new Login_Model();
        if($this->model->login()){
            $this->view->render(HOMEPAGE);
        }else{
            $this->view->render(LOGINPAGE,1);
           echo $this->model->msg;

        }
    }

}
