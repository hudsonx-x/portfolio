<?php

    spl_autoload_register(function(string $className){

        $namespace = 'Sdk';

        if (str_starts_with($className,$namespace)){
            $className = str_replace($namespace . '\\', 'framework/', $className);
            $className = str_replace('\\', '/', $className);
            $className .= '.php';
            
            if (file_exists($className)){
                require_once($className);
                return;
            }

            throw new Exception("the class was not found at {$className}");

        }

    });

