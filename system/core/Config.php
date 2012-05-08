<?php

class Config {

    public $baseUrl;
    public $db;
    
    function __construct() {
        include APPLICATION_PATH.'/config/database.php';
        $this->baseurl = $_SERVER['HTTP_HOST'];
    }
    
    function load($name) {
        $file = include APPLICATION_PATH.'/config/'.$name.'.php';
        $this->$name = (object) $name;
        foreach($file[$name] as $key => $value) {
            $this->$name->$key = $value;
        }
        return $this->$name;
    }
}
