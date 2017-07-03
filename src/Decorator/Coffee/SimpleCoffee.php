<?php

namespace Decorator\Coffee;


use Decorator\Coffee\Interfaces\CoffeeInterface;

class SimpleCoffee implements CoffeeInterface
{
    public function getCost()
    {
        return 10;
    }

    public function getDescription()
    {
        return 'Simple coffee';
    }

}