<?php

    // check if composer autoloader exists
    // include it if it exists
    if (file_exists('vendor/autoload.php')){
        require_once('vendor/autoload.php');
    }

    $url = explode('?' , $_SERVER['REQUEST_URI'])[0];

    var_dump($url);
    