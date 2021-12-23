<?php 
    class LibrarianHome extends Controller{
        function __construct(){
            parent::__construct();
        }
        function index(){
            if(isset($_SESSION['id'])){
                $this->view->render(HOMEPAGE,1);
            }else{
                $this->view->render(LOGINPAGE,1);
            }
        }
        function viewBooks(){
            if($_SESSION['is_librarian'] == "1"){
                $this->model = new Librarian_Management_Model();
                $this->view->books = $this->model->viewBooks();
                $this->view->render("management/editBooks",1);
            }else{
                
            }
        }
        function viewBook($id){
            if($_SESSION['is_librarian'] == "1"){
                $this->model = new Home_Book_Model();
                $this->view->book = $this->model->viewBook($id);
                $this->view->render("management/editBook",1);
            }else{
                
            }
        }
        function editBook($id){
            if($_SESSION['is_librarian'] == "1"){
                $this->model = new Librarian_Management_Model();
                if($this->model->editBook($id)){
                    $this->view->render("management/editSuccess",1);
                }else{
                    $this->view->render("management/editError",1);
                }
            }else{
                
            }
        }
        function removeBook($id){
            if($_SESSION['is_librarian'] == "1"){
                $this->model = new Librarian_Management_Model();
                if($this->model->removeBook($id)){
                    $this->view->render("management/removeSuccess",1);
                }else{
                    $this->view->render("management/removeError",1);
                }
            }else{
                
            }
        }
        function addBook(){
            if($_SESSION['is_librarian'] == "1"){
                $this->model = new Librarian_Management_Model();
                if($this->model->addBook()){
                    $this->view->render("management/editSuccess",1);
                }else{
                    $this->view->render("management/editError",1);
                }
            }else{
                
            }
        }
        function viewForm(){
            if($_SESSION['is_librarian'] == "1"){
                $this->view->render("management/addBook",1);
            }else{
                
            }
        }
        function viewRating(){
            if($_SESSION['is_librarian'] == "1"){
                $this->model = new Librarian_Management_Model();
                $this->view->rating = $this->model->viewRating();
                $this->view->books = $this->model->viewBooks();
                $this->view->users = $this->model->viewUsers();
                $this->view->render("management/editRating",1);
            }else{
                
            }
        }
        function insertRating(){
            if($_SESSION['is_librarian'] == "1"){
                $this->model = new Librarian_Management_Model();
                if($this->model->insertRating()){
                    $this->view->render("management/ratingSuccess",1);
                }else{
                    $this->view->render("management/ratingError",1);
                }
            }else{
                
            }
        }
        function removeRating($id){
            if($_SESSION['is_librarian'] == "1"){
                $this->model = new Librarian_Management_Model();
                if($this->model->removeRating($id)){
                    $this->view->render("management/removeRatingSuccess",1);
                }else{
                    $this->view->render("management/removeRatingError",1);
                }
            }else{
                
            }
        }
        function viewRent(){
            if($_SESSION['is_librarian'] == "1"){
                $this->model = new Librarian_Management_Model();
                $this->view->rent = $this->model->viewRent();
                $this->view->render("management/viewRent",1);
            }else{
                
            }
        }
        function removeRent($userId,$bookId){
            if($_SESSION['is_librarian'] == "1"){
                $this->model = new Librarian_Management_Model();
                if($this->model->removeRent($userId,$bookId)){
                    $this->view->render("management/removeRentSuccess",1);
                }else{
                    $this->view->render("management/removeRentError",1);
                }
            }else{
                
            }
        }
    }