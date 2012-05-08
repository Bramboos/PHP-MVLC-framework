<?php
class indexController extends baseController {

    function indexAction() {
        $this->layout->title = 'This is the lay-out title :D';
            
        $this->view->render('index');
    }
}
