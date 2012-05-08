<?php

class Layout {

    private $_name;
    
    function __construct() {
    
    }
    
    function render($name = false) {
        $this->_name = $name;
        include 'app/layout/page.php';
    }
    
    function show_page() {
        if(file_exists('app/views/'.$this->_name.'.php')) {
            include 'app/views/'.$this->_name.'.php';
        }
        else
        {
            include 'app/views/404.php';
        }
    }
    
    function show_navbar() {
        include 'app/layout/navbar.php';
    }
    
    function show_404() {
        $this->render('404');
        exit();
    }
}
