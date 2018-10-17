<?php

namespace App\Home;

use Klein\Klein;
use League\Container\Container;
use Framework\Interfaces\ModuleInterface;
use Psr\Container\ContainerInterface;
use App\Home\HomeAction;
use Framework\Http\RequestHandler;
use Klein\Request;


class HomeModule implements ModuleInterface
{
    public static function registerRoutes(Klein $klein, Request $request, ContainerInterface $container)
    {
        $action = new HomeAction($container, $request);
        
        /* Add routes here*/
        $klein->get('/', [$action, 'invoke']);

        $klein->dispatch($request, null, null);
    }
}