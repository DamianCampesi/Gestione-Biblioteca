<?php 

class Registration extends Controller{

    function __construct(){
        parent::__construct();
    }
    function index(){
        $this->view->render(REGISTRATIONPAGE);
    }
    function registration(){
        $this->model = new Registration_Model();
        if($this->model->registration()){
            $this->view->render("login/index");
        }else{
            $this->view->render("registration/index");
        }
    }
}
?>