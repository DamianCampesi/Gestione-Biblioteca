<?php 
    class Home extends Controller{
        function __construct(){
            parent::__construct();
        }
        function index(){
            if(empty($_SESSION['id'])){
                $this->view->render(LOGINPAGE,1);
            }else{
                //$this->viewBooks();
                $this->view->render(HOMEPAGE,1);
            }
        }
        function viewBooks(){
            $this->model = new Home_Book_Model();
            $this->view->books = $this->model->viewBooks();
            $this->view->render("home/books",1);
        }
        function viewRent(){
            $this->model = new Home_Rent_Model();
            $this->view->rent = $this->model->viewRent();
            $this->view->render("home/rent",1); 
        }
        function viewRating(){
            $this->model = new Home_Rating_Model();
            $this->view->rating = $this->model->viewRating();
            $this->view->render("home/rating",1);
        }
    }