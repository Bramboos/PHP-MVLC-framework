<?php

class View {

    private $_name;
    private $_layout;
    
    function __construct() {
        $this->_layout = new Layout();
    }
    
    function render($name = false) {
        $this->_name = $name;
        include APPLICATION_PATH.'/layout/page.php';
    }
    
    function show_page() {
        if(file_exists('app/views/'.$this->_name.'.php')) {
            include APPLICATION_PATH.'/views/'.$this->_name.'.php';
        }
        else
        {
            include APPLICATION_PATH.'/views/404.php';
        }
    }
    
    function show_navbar() {
        include APPLICATION_PATH.'/layout/navbar.php';
    }
    
    function show_404() {
        $this->render('404');
        exit();
    }
}
