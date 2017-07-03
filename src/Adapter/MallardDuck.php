<?php

namespace Adapter;


use Common\Utils;
use Adapter\Interfaces\IDuck;

class MallardDuck implements IDuck
{
    public function quack()
    {
        Utils::println('Quack');
    }

    public function fly()
    {
        Utils::println("I'm flying");
    }
}