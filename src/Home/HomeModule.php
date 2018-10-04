<?php

namespace App\Home;

use Klein\Klein;
use League\Container\Container;
use Framework\Interfaces\ModuleInterface;


class HomeModule implements ModuleInterface
{
    public static function registerRoutes(Klein $klein)
    {
        $klein->respond('GET', '/', function () {
            return '<h1> Homepage </h1>';
        });
    }
}