<?php

namespace Singleton\Pattern;

class Singleton
{
    private static $instance;

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }

    public static function getInstance()
    {
        return (!self::$instance) ? self::$instance = new self() : self::$instance;
    }
}