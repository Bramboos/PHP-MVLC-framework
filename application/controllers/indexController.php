<?php
class indexController extends baseController {

    function indexAction() {
        $res = $this->db->query("SELECT people_id FROM people_ip_addresses WHERE ip = '".$this->db->real_escape_string($_SERVER["REMOTE_ADDR"])."'");
    $this->view->banned = ($res->num_rows == 0) ? false : true;
    $row = $res->fetch_assoc();
    $this->view->ban_id = $row['people_id'];
    
        $this->view->render('index');
    }
}
