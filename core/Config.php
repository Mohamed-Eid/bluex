<?php

namespace Bluex\Framework;

class Config
{
    public static function load()
    {
        return require_once __DIR__ . '/../config/app.php';
    }
}
