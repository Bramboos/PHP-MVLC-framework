<?php
class indexController extends baseController {

    function indexAction() {
        $this->view->title = 'This is the lay-out title :D';
            
        $this->view->render('index');
    }
}
