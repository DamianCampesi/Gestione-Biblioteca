<?php 
class Application{

    private $url_controller = null;
    private $url_method = null;
    private $url_parameter_1 = null;
    private $url_parameter_2 = null;
    private $url_parameter_3 = null;

    /**
     * Funzione che serve per poter utilizzare il modello MVC.
     * Fa partire i controller con i metodi e i parametri che servono.
     */
    public function __construct(){
        $this->getUrl();
        if (file_exists('application/controller/'.$this->url_controller . '.php')) {
            require 'application/controller/'.$this->url_controller . '.php';
            $this->url_controller = new $this->url_controller();
            if (method_exists($this->url_controller, $this->url_method)) {
                if (isset($this->url_parameter_3)) {
                    $this->url_controller->{$this->url_method}($this->url_parameter_1,
                    $this->url_parameter_2,$this->url_parameter_3);
                } elseif (isset($this->url_parameter_2)) {
                    $this->url_controller->{$this->url_method}($this->url_parameter_1,
                    $this->url_parameter_2);
                } elseif (isset($this->url_parameter_1)) {
                    $this->url_controller->{$this->url_method}($this->url_parameter_1);
                } else {
                    $this->url_controller->{$this->url_method}();
                }
            } else {
                $this->url_controller->index();
            }
        }elseif(empty($this->url_controller)){
            require "application/controller/index.php";
            $index = new Index();
            $index->index();
        } else {
            require "application/controller/myerror.php";
            $error = new MyError();
            $error->index();
        }
    }
    /**
     * Funzione che prende l'URL e inserisce i vari pezzi nelle variabili controller,funzione e parametri.
     * Imposta il tutto in base al modell MVC --> http:// sito.ch/controller/funzione_controller/parametro1/parametro2
     * 
     */
    public function getUrl(){
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'],'/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode("/",$url);

            $this->url_controller = (isset($url[0]) ? $url[0] : null);
            $this->url_method = (isset($url[1]) ? $url[1] : null);
            $this->url_parameter_1 = (isset($url[2]) ? $url[2] : null);
            $this->url_parameter_2 = (isset($url[3]) ? $url[3] : null);
            $this->url_parameter_3 = (isset($url[4]) ? $url[4] : null);
        }
    }
}
?>