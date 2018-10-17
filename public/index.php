<?php

/* Packages */
require __DIR__ . "/../vendor/autoload.php";

use Framework\App;
use League\Container\Container;
use Klein\Klein;
use Klein\Request;
use App\Home\HomeModule;
use Framework\Renderer\Sya;
use App\Home\HomeExt;
use Framework\Renderer\Renderer;


/* Init container */
$container = new Container();
$container->add(Klein::class);

/* Modules */
$modules = [
    HomeModule::class,
];

/* Views Extensions */
$exts = [
    'home' => HomeExt::class
];
$container->add(Sya::class)
          ->addArgument($exts);

/* Renderer */
$container->add(Renderer::class)
          ->addArgument($container->get(Sya::class));

/* Send request to the App */
$app = new App($container, $modules);
$app->esketit(Request::createFromGlobals());