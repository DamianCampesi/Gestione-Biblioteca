<?php 
class Bootstrap{

    private $url_controller = null;
    private $url_method = null;
    private $url_parameter = null;

    public function __construct(){
        $this->getUrl();
        if (file_exists('/controller/'.$this->url_controller . '.php')) {
            require $this->url_controller . '.php';
            $this->url_controller = new $this->url_controller();
            if (method_exists($this->url_controller, $this->url_action)) {
                if (isset($this->url_parameter_3)) {
                    $this->url_controller->{$this->url_action}($this->url_parameter_1,
                    $this->url_parameter_2,$this->url_parameter_3);
                } elseif (isset($this->url_parameter_2)) {
                    $this->url_controller->{$this->url_action}($this->url_parameter_1,
                    $this->url_parameter_2);
                } elseif (isset($this->url_parameter_1)) {
                    $this->url_controller->{$this->url_action}($this->url_parameter_1);
                } else {
                    $this->url_controller->{$this->url_action}();
                }
            } else {
                $this->url_controller->index();
            }
        } else {
            require __DIR__ . "/../controller/MyError.php";
            $error = new MyError();
            $error->index();
        }
    }
    public function getUrl(){
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'],'/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode("/",$url);

            $this->url_controller = (isset($url[0]) ? $url[0] : null);
            $this->url_method = (isset($url[1]) ? $url[1] : null);
            $this->url_parameter = (isset($url[2]) ? $url[2] : null);
        }
    }
}
?>