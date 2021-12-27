<?php 
    class Home extends Controller{
        function __construct(){
            parent::__construct();
        }
        /*
        *Funzione di index
        *Una volta effettuato il login si può accedere alla homepage
        */
        function index(){
            if(isset($_SESSION['id'])){
                $this->view->render(HOMEPAGE,1);
            }else{
                $this->view->render(LOGINPAGE,1);
            }
        }
        /**
         * Funzione per effettuare il logout
         * 
         */
        function logout(){
            if(isset($_SESSION['id'])){
                session_unset();
                session_destroy();
                header('Location: '.URL."login");
            }else{
                $this->view->render(LOGINPAGE,1);
            }
        }
        /**
         * Funzione per poter visualizzare la lista dei libri
         */
        function viewBooks(){
            if(isset($_SESSION['id'])){
                $this->model = new Home_Book_Model();
                $this->view->books = $this->model->viewBooks();
                $this->view->render("home/books",1);
            }else{
                $this->view->render(LOGINPAGE,1);
            }
        }
        /**
         * Funzione per visualizzare un determianto libro
         * @param è l'id del libo ce si vuole visualizzare
         */
        function viewBook($id){
            if(isset($_SESSION['id'])){
                $this->model = new Home_Book_Model();
                $this->view->book = $this->model->viewBook($id);
                $this->view->render("home/book",1);
            }else{
                $this->view->render(LOGINPAGE,1);
            }
        }
        /**
         * Funzione per visualizzare tutti i propri noleggi
         */
        function viewRent(){
            if(isset($_SESSION['id'])){
                $this->model = new Home_Rent_Model();
                $this->view->rent = $this->model->viewRent();
                $this->view->render("home/rent",1);
            }else{
                $this->view->render(LOGINPAGE,1);
            }
        }
        /**
         * Funzione per poter visualizzare le valutazioni
         */
        function viewRating(){
            if(isset($_SESSION['id'])){
                $this->model = new Home_Rating_Model();
                $this->view->rating = $this->model->viewRating();
                $this->view->render("home/rating",1);
            }else{
                $this->view->render(LOGINPAGE,1);
            }
        }
        /**
         * Funzione per poter effetuare il noleggio
         * Se il noleggio avviene, si renderizza il risultato, stessa cosa se il noleggio non è riuscito
         */
        function doRent($id){
            if(isset($_SESSION['id'])){
                $this->model = new Home_Rent_Model();
                if($this->model->doRent($id)){
                    //$this->view->rent = $this->model->doRent($id);
                    $this->view->render("home/rentSuccess",1);
                }else{
                    $this->view->render("home/rentError",1);
                }
            }else{
                $this->view->render(LOGINPAGE,1);
            }
        }
    }