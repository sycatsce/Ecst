<?php

namespace Framework\Renderer;

class Sya
{
    private $services;
    
    public function __construct(array $exts)
    {
        foreach($exts as $alias=>$service)
        {
            $this->services[$alias] = $service;
        }
    }

    public function get(string $alias)
    {
        return $this->services[$alias];
    }
}