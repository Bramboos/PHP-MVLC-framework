<?php
class Controller {

    private static $instance;
    
    function __construct() {
        self::$instance =& $this;
        
        $this->view = new View();
        $this->config = new Config();
        $this->layout = new Layout();
    }
    
    public static function &get_instance() {
		return self::$instance;
	}
	
    function load_model($name) {
        $this->loader->load_class($name, 'models');
    }
}
