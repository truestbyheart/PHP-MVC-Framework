<?php
require  "../vendor/autoload.php";
require_once 'config/config.php';


// autoloading all files in libraries
spl_autoload_register(function ($className) {
    require_once 'libraries/' . $className . '.php';
}); 
