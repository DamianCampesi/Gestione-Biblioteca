<?php 
    class Home extends Controller{
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
        function logout(){
            session_destroy();
            $this->view->render("login/index",1);
        }
        function viewBooks(){
            $this->model = new Home_Book_Model();
            $this->view->books = $this->model->viewBooks();
            $this->view->render("home/books",1);
        }
        function viewBook($id){
            $this->model = new Home_Book_Model();
            $this->view->book = $this->model->viewBook($id);
            $this->view->render("home/book",1);
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
        function doRent($id){
            $this->model = new Home_Rent_Model();
            if($this->model->doRent($id)){
                //$this->view->rent = $this->model->doRent($id);
                $this->view->render("home/rentSuccess",1);
            }else{
                $this->view->render("home/rentError",1);
            }
        }
    }