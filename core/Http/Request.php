<?php

namespace Bluex\Framework\Http;

class Request
{

    public array $server;
    public function __construct()
    {
        $this->server = $_SERVER;
    }
    public function path()
    {
        return substr(str_replace("public", "", explode('?', $this->server['REQUEST_URI'])[0]), 2);
    }

    public function method()
    {
        return strtolower($this->server['REQUEST_METHOD']);
    }

    public function query_string()
    {
        return $this->server['QUERY_STRING'];
    }
}
