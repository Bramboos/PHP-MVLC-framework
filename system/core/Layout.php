<?php

class Layout {

    private $view;
    
    function __construct() {
        $this->view =& get_instance()->view;
    }
    
    function render() {
        include APPLICATION_PATH.'/layout/page.php';
    }
}
