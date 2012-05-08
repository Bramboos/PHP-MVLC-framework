<?php
    function __autoload($name) {
        if(file_exists(SYSTEM_PATH.'/core/'.$name . '.php')) {
            include SYSTEM_PATH.'/core/'.$name . '.php';
        }
        elseif(file_exists(SYSTEM_PATH.'/libraries/'.$name . '.php')) {
            include SYSTEM_PATH.'/libraries/'.$name . '.php';
        }
        elseif(file_exists(APPLICATION_PATH.'/controllers/'.$name . '.php')) {
            include APPLICATION_PATH.'/controllers/'.$name . '.php';
        }
        elseif(file_exists(APPLICATION_PATH.'/core/'.$name . '.php')) {
            include APPLICATION_PATH.'/core/'.$name . '.php';
        }
        else
        {
            echo 'Autoloader fails on name: '.$name;
        }
    }
    
    function &get_instance()
	{
		return Controller::get_instance();
	}
	
class Application {

    function __construct() {
        $this->loader = new Loader();
        $this->config = new Config();
        $this->controller = new Config();
    }
    
    function run() {
        if(!isset($_SERVER['PATH_INFO'])) {
            $this->_controller = $this->loader->load_action($this->loader->load_controller());
        }
        else {
            $param = explode("/", $_SERVER['PATH_INFO']);
            $param = array_filter($param, 'strlen');
            if(!isset($param[1])) $param[1] = 'index';
            if(!isset($param[2])) $param[2] = 'index';
            $this->_controller = $this->loader->load_action($this->loader->load_controller($param[1]), $param[2]);
        }
        return $this;
    }
}
