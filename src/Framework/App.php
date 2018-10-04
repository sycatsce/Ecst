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
     * @var ServerRequestInterface
     */
    private $container;

    public function __construct(ContainerInterface $container, array $modules)
    {
        $this->container = $container;
        $this->modules =  $modules;
    }

    public function esketit(Request $request)
    {
        foreach($this->modules as $module){
            $module::registerRoutes($klein);
        }

        $klein->dispatch($request, null, null);
        $this->handleRequest($klein, $request);
        $klein->response()->send();
    }
}