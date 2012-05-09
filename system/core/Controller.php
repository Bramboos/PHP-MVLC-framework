<?php
class Controller {

    private static $instance;
    
    public $config;
    public $view;
    
    function __construct() {
        $this->config = new Config();
        $this->view = new View();
        self::$instance =& $this;
    }
    
    public static function &get_instance() {
		return self::$instance;
	}
	
    function load_model($name) {
        $this->loader->load_class($name, 'models');
    }
    
    public function __call($name, $arguments)
    {
        $this->view->render('404');
    }
}
