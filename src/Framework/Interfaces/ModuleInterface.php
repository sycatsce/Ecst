<?php

namespace Framework\Interfaces;

use Klein\Klein;

interface ModuleInterface{
    
    public static function registerRoutes(Klein $klein);

}