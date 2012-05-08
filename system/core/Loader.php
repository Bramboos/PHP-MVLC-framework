<?php

class Loader {
    
    function load_class($name, $type) {
    
        if(is_array($name)) {
            foreach ($name as $value) {
                require_once $type.'/'.$value.'.php';
            }
        }
        else {
            if(file_exists(APPLICATION_PATH.'/'.$type.'/'.$name.'.php')) {
                require_once APPLICATION_PATH.'/'.$type.'/'.$name.'.php';
                return true;
            }
            else {
                return false;
            }
        }
    }
    
    function load_action($controller, $action_name = 'index') {
        $action = $action_name.'Action';
        return $controller->{$action}();
    }
    
    function load_controller($controller_name = 'index') {
        $controller = $controller_name.'Controller';
        
        if(!$this->load_class($controller, 'controllers')) {
            $view = new View();
            $view->show_404();
            exit();
        }
        return new $controller;
    }
    
    function load_model() {
    
    }
}
