<?php

/* Packages */
require __DIR__ . "/../vendor/autoload.php";

use Framework\App;
use League\Container\Container;
use Klein\Klein;
use Klein\Request;

/* Imports app modules */
use App\Home\HomeModule;


/* Init container */
$container = new Container();
$container->add(Klein::class);

/* Modules */
$modules = [
    HomeModule::class,
];

/* Send request to the App */
$app = new App($container, $modules);
$app->esketit(Request::createFromGlobals());