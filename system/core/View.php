<?php

class View {

    public $name;
    private $_layout;
    
    function __construct() {
        $this->_layout =& get_instance()->layout;
    }
    
    function render($name = false) {
        $this->name = $name;
        $this->_layout->render();
        //include APPLICATION_PATH.'/layout/page.php';
    }
    
    function show_navbar() {
        include APPLICATION_PATH.'/layout/navbar.php';
    }
    
    function show_page() {
        if(file_exists(APPLICATION_PATH.'views/'.$this->name.'.php')) {
            include APPLICATION_PATH.'/views/'.$this->name.'.php';
        }
        else
        {
            if(file_exists(APPLICATION_PATH.'/views/404.php')) {
                include APPLICATION_PATH.'/views/404.php';
            }
        }
    }
    
    function show_404() {
        $this->render('404');
        exit();
    }
}
