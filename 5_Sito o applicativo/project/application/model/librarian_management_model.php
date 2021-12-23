<?php 
    class Librarian_Management_Model extends Model{
        function __construct(){
            parent::__construct();
        }
        function viewBooks(){
            require 'application/config/connect.php';
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                $search = trim(validateString($_POST["searchBooks"]));
                $filter = validateString($_POST["filterSelect"]);
            }
            if(!empty($search)){
                if($filter == "title"){
                    $query = "SELECT * FROM book WHERE title LIKE '%".$search."%'";
                    $result = $conn->query($query);
                    $out = array();
                    while($rows = $result->fetch_assoc()){
                        array_push($out,$rows);
                    }
                    return $out;
                }elseif($filter == "author"){
                    $query = "SELECT * FROM book WHERE author LIKE '%".$search."%'";
                    $result = $conn->query($query);
                    $out = array();            
                    while($rows = $result->fetch_assoc()){
                        array_push($out,$rows);
                    }
                    return $out;
                }
            }else{
                $query = "SELECT * FROM book";
                $result = $conn->query($query);
                $out = array();            
                while($rows = $result->fetch_assoc()){
                    array_push($out,$rows);
                }
                return $out;
            }
            $query = "SELECT * FROM book";
            $result = $conn->query($query);
            $out = array();            
            while($rows = $result->fetch_assoc()){
                array_push($out,$rows);
            }
            return $out;
        }
        function editBook($id){
            require 'application/config/connect.php';
            $title = addslashes(validateString($_POST["title"]));
            $author = addslashes(validateString($_POST["author"]));
            $summary = addslashes(validateString($_POST["summary"]));
            $coverImage = $_FILES["coverImage"]["name"];
            $tempname = $_FILES["coverImage"]["tmp_name"];
            $folder = "images/".$coverImage;
            if(empty($coverImage)){
                $query = "UPDATE book SET title = '".$title."', author = '".$author."', summary ='".$summary."' WHERE id = '".$id."'";
            }else{
                $query = "UPDATE book SET title = '".$title."', author = '".$author."', summary = '".$summary."',cover_image = '".$coverImage."' WHERE id = '".$id."'";
            }
            $result = $conn->query($query);
            $query = "SELECT * from book WHERE title = '".$title."' AND author = '".$author."' AND summary = '".$summary."'";
            $result = $conn->query($query);
            $row = $result->fetch_assoc();
            move_uploaded_file($tempname, $folder);
            if($row > 0){
                return true;
            }
            return false;
        }  
        function removeBook($id){
            require 'application/config/connect.php';
            $query = "DELETE from book WHERE id='".$id."'";
            $result = $conn->query($query);
            $query = "SELECT * from book WHERE id = '".$id."'";
            $result = $conn->query($query);
            $row = $result->fetch_assoc();
            if($row == 0){
                return true;
            }
            return false;
        }
        function addBook(){
            require 'application/config/connect.php';
            $title = addslashes(validateString($_POST["title"]));
            $author = addslashes(validateString($_POST["author"]));
            $summary = addslashes(validateString($_POST["summary"]));
            $coverImage = $_FILES["coverImage"]["name"];
            $tempname = $_FILES["coverImage"]["tmp_name"];
            $folder = "images/".$coverImage;
            $query = "INSERT INTO book(title, author, summary, cover_image) values('".$title."','".$author."','".$summary."','". $coverImage."')";
            $result = $conn->query($query);
            $query = "SELECT id from book WHERE title ='".$title."' AND author ='".$author."' AND summary ='".$summary."' AND cover_image ='".$coverImage."'";
            $result = $conn->query($query);
            $row = $result->fetch_assoc();
            if(count($row) == 1 && move_uploaded_file($tempname, $folder)){
                return true;
            }
            return false;
        }
        function viewRating(){
            require 'application/config/connect.php';
            $query = "SELECT book.title,rating.valutazione,rating.id,user.email FROM rating INNER JOIN book ON book.id = rating.book_id INNER JOIN user on user.id = rating.user_id";
            $result = $conn->query($query);
            $out = array();
            while($rows = $result->fetch_assoc()){
                array_push($out,$rows);
            }
            return $out;
        }
        function viewUsers(){
            require 'application/config/connect.php';
            $query = "SELECT id,email FROM user";
            $result = $conn->query($query);
            $out = array();
            while($rows = $result->fetch_assoc()){
                array_push($out,$rows);
            }
            return $out;
        }
        function insertRating(){
            require 'application/config/connect.php';
            $userId = $_POST["user"];
            $bookId = $_POST["book"];
            $rating = $_POST["rating"];
            $query = "INSERT INTO rating(user_id,book_id,valutazione) values('".$userId."','".$bookId."','".$rating."')";
            $result = $conn->query($query);

            $query = "SELECT * from rating WHERE user_id ='".$userId."' AND book_id ='".$bookId."' AND valutazione ='".$rating."'";
            $result = $conn->query($query);
            $row = $result->fetch_assoc();
            if($row > 0){
                return true;
            }
            return false;
        }
        function removeRating($id){
            require 'application/config/connect.php';
            $query = "DELETE from rating WHERE id='".$id."'";
            $result = $conn->query($query);
            $query = "SELECT * from rating WHERE id = '".$id."'";
            $result = $conn->query($query);
            $row = $result->fetch_assoc();
            if($row == 0){
                return true;
            }
            return false;
        }
        function viewRent(){
            require 'application/config/connect.php';
            $query = "SELECT book.title,user.email,rent.start_date,rent.end_date,rent.user_id,rent.book_id FROM rent INNER JOIN book ON book.id = rent.book_id INNER JOIN user on user.id = rent.user_id";
            $result = $conn->query($query);
            $out = array();
            while($rows = $result->fetch_assoc()){
                array_push($out,$rows);
            }
            return $out;
        }
        function removeRent($userId,$bookId){
            require 'application/config/connect.php';
            $query = "DELETE from rent WHERE user_id='".$userId."' AND book_id ='".$bookId."'";
            $result = $conn->query($query);
            $query = "SELECT * from rent WHERE user_id='".$userId."' AND book_id ='".$bookId."'";
            $result = $conn->query($query);
            $row = $result->fetch_assoc();
            if($row == 0){
                return true;
            }
            return false;
        }
    }