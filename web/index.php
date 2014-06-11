<?php
/** openshift silex test */

$filename = __DIR__.preg_replace('#(\?.*)$#', '', $_SERVER['REQUEST_URI']);
if (php_sapi_name() === 'cli-server' && is_file($filename)) {
    return false;
}

$loader = require(__DIR__."/../vendor/autoload.php");
$loader->add('',__DIR__."/../app");

$app = new App();

$app->run();
