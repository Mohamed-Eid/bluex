<?php

namespace Bluex\Framework;

class App
{

    public array $config;
    public function __construct()
    {
        $this->config = Config::load();
    }

    public function run()
    {
        echo "hello world";
    }
}
