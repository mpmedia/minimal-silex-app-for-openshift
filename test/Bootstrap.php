<?php

$loader=require(__DIR__."/../vendor/autoload.php");
$loader->add('',__DIR__."/../app");
$loader->add('',__DIR__."/");

class Bootstrap
{
    static function getApplication(){
        $application = new App(array("debug"=>TRUE));
        $application['debug']=true;
        $application['exception_handler']->disable();
        $app['session.test'] = true;
        return $application;
    }
}
