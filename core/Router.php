<?php

namespace Bluex\Framework;

use Bluex\Framework\Http\Request;
use Exception;

class Router
{

    public array $routes = [];

    public Request $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function post($path, $callback)
    {
        $this->routes['post'][$path] = $callback;
    }

    public function resolve()
    {
        $callback = $this->routes[$this->request->method()][$this->request->path()] ?? null;
        if ($callback) {
            call_user_func($callback);
        } else {
            throw new Exception("Route Not Found");
        }
    }
}
