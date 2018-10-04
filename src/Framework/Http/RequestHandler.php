<?php

namespace Framework\Http;

use Klein\Request;
use Klein\Klein;

trait RequestHandler
{
    public function handleRequest(Klein $klein)
    {
        /* Redirect if uri ends with '/' */
        $uri = $klein->request()->uri();
        if (!empty($uri) && $uri[-1] === "/" && strlen($uri) > 1) {
            $klein->response()->redirect(substr($uri, 0, -1))->send();
            die;
        }
    }
}