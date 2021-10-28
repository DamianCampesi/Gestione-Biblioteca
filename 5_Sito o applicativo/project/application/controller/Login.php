<?php 

class Login extends Controller{

    function __construct(){
        parent::__construct();
    }
    function index(){
        $this->view->render(LOGINPAGE);
    }
    function login(){
        $this->model = new Login_Model();
        if($this->model->login()){
            $this->view->render("home/index");
        }else{
            $this->view->render("login/index");
           echo $this->model->msg;

        }
    }

}
