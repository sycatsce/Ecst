<?php

namespace Framework\Interfaces;

use Klein\Klein;
use Psr\Container\ContainerInterface;
use Klein\Request;

interface ModuleInterface{
    
    public static function registerRoutes(Klein $klein, Request $request, ContainerInterface $container);

}