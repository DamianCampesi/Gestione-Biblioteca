<?php 
    class LibrarianHome extends Controller{
        function __construct(){
            parent::__construct();
        }
        function index(){
            if(empty($_SESSION['id'])){
                $this->view->render(LOGINPAGE,1);
            }else{
                $this->view->render(HOMEPAGE,1);
            }
        }
        function viewBooks(){
            $this->model = new Catalogue_Management_Model();
            $this->view->books = $this->model->viewBooks();
            $this->view->render("catalogueManagement/index",1);
        }
    }