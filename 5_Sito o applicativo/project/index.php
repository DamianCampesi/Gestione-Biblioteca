<?php 
    date_default_timezone_set("Europe/Zurich");
    //libs
    require 'application/libs/application.php';
    require 'application/libs/Controller.php';
    require 'application/libs/Model.php';
    require 'application/libs/View.php';
    //models
    require 'application/model/login_model.php';
    require 'application/model/home_book_model.php';
    require 'application/model/home_rent_model.php';
    require 'application/model/home_rating_model.php';
    require 'application/model/registration_model.php';
    require 'application/model/librarian_management_model.php';
    //connection-config
    require 'application/config/path.php';
    require 'application/config/control.php';
    $app = new Application();
 ?>