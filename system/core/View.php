<?php

class View {

    public $name;
    
    function __construct() {
    }
    
    function render($name) {
        $this->name = $name;
        if(file_exists(APPLICATION_PATH.'/views/'.$this->name.'.php')) {
            include APPLICATION_PATH.'/layout/page.php';
        }
        else
        {
            include APPLICATION_PATH.'/layout/404.php';
        }
    }
    
    function show_navbar() {
        include APPLICATION_PATH.'/layout/navbar.php';
    }
    function show_header() {
        include APPLICATION_PATH.'/layout/header.php';
    }
    
    function show_footer() {
        include APPLICATION_PATH.'/layout/footer.php';
    }
    
    function show_page() {
        if(file_exists(APPLICATION_PATH.'/views/'.$this->name.'.php')) {
            include APPLICATION_PATH.'/views/'.$this->name.'.php';
        }
        else
        {
            if(file_exists(APPLICATION_PATH.'/page/404.php')) {
                include APPLICATION_PATH.'/page/404.php';
            }
        }
    }
    
    function show_404() {
        $this->render('404');
        exit();
    }
}
