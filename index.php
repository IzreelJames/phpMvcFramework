<?php

    $app = new Application;


//    Configuration on some router, so function is executed with every get request
    $app->router->get('/', function(){
        return 'Hello World';
    });


    $app->run();

?>