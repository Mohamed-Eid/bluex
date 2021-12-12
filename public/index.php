<?php

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| this application. We just need to utilize it! We'll simply require it
| into the script here so we don't need to manually load our classes.
|
*/

use Bluex\Framework\App;
use Bluex\Framework\Http\Request;

require __DIR__ . '/../vendor/autoload.php';

$app = new App();

$app->router->get('/', function () {
    echo "Hello World BBBB";
});

$app->router->get('test', function () {
    echo "Hello Test";
});

$app->run();
