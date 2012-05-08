<?php 
    define("SYSTEM_PATH", "/var/www/MVLC/system");
    define("APPLICATION_PATH", "/var/www/MVLC/application");

    define("ENVIRONMENT", "development");
    
    require_once SYSTEM_PATH.'/core/Application.php';
    $app = new Application();
    $app->Run();
