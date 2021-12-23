<?php 

    class Controller{
        /**
         * Classe di base dei controllers che imposta degli attributi che fanno riferimento alla view di base e il model di basse.
         */
        function __construct(){
            $this->view = new View();
            $this->model = new Model();
        }

    }

?>