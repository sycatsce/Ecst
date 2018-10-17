<?php

namespace App\Home;

use Framework\Renderer\Renderer;
use Psr\Container\ContainerInterface;
use Klein\Klein;
use Klein\Request;

class HomeAction
{
    private $requestParameters;

    public function __construct(ContainerInterface $container, Request $request)
    {
        $this->renderer = $container->get(Renderer::class);
        $this->renderer->addPath('home', __DIR__ . '/views');
        $this->requestParameters = $request->params();
    }

    public function invoke()
    {
        return $this->renderer->render('@home/home', $this->requestParameters);
    }
}