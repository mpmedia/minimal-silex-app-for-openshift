<?php

use \Silex\Application;

/**
 * Main Application
 */
class App extends Application
{
    function __construct($array = array())
    {
        parent::__construct($array);
        $this->get('/', function () {
            return "Hello World!";
        });
    }
}
