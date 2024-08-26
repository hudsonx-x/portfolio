<?php
    if (file_exists('framework/autoload.php')){
        require_once('framework/autoload.php');
    }
    // check if composer autoloader exists

    // include it if it exists
    if (file_exists('vendor/autoload.php')){
        require_once('vendor/autoload.php');
    }

    $url = explode('?' , $_SERVER['REQUEST_URI'])[0];
    
    $router = new Sdk\Http\Router();

    var_dump($router);
    