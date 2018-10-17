<?php

namespace Framework;

use Psr\Container\ContainerInterface;
use Klein\Klein;
use Klein\Request;
use Klein\Response;
use Framework\Http\ResponseHandler;
use Framework\Http\RequestHandler;

class App
{
    use RequestHandler;

    /**
     * @var ContainerInterface
     */
    private $container;

    public function __construct(ContainerInterface $container, array $modules)
    {
        $this->container = $container;
        $this->modules =  $modules;
    }

    public function esketit(Request $request)
    {
        $klein = $this->container->get(Klein::class);
        
        foreach($this->modules as $module){
            $module::registerRoutes($klein, $request, $this->container);
        }

        $this->handleRequest($klein, $request);
        $klein->response()->send();
    }
}