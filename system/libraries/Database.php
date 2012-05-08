<?php
class Database extends Mysqli {
    
    function __construct() {
    $instance =& get_instance()->config;
    $config = $instance->load('database');
        parent::__construct($config->host, $config->username, $config->password, $config->name);
    }
}
