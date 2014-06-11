<?php

$loader = require(__DIR__."/vendor/autoload.php");

use \Silex\Application;

$app = new Application();

$app->get('/',function(){
    return "Hello World!";
});

$app->run();
