<?php

namespace Bluex\Framework;

use Bluex\Framework\Http\Request;

class App
{


    public array $config;
    public Router $router;

    public function __construct()
    {
        $this->config = Config::load();
        $this->router = new Router(new Request());
    }

    public function run()
    {
        $this->router->resolve();
    }
}
