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
    
    // here we are creating a new variable 
    // called router we are assigning it 
    // a class instance of Router
    // a class instantiation is denoted 
    // by the keyword *new*
    $router = new Sdk\Http\Router();
    
    // calling the resolveRoute function on the router and 
    // passing the variable url
    $router->resolveRoute($url);
