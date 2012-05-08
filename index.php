<?php 
    define("SYSTEM_PATH", "system");
    define("APPLICATION_PATH", "application");

    define("ENVIRONMENT", "development");
    
    require_once SYSTEM_PATH.'/core/Application.php';
    $app = new Application();
    $app->Run();
