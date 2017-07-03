<?php

namespace Factory\Pizza;


use Common\Utils;
use Factory\Pizza\Interfaces\PizzaInteface;

class CheesePizza implements PizzaInteface
{
    public function create()
    {
        Utils::println('create Cheese Pizza');
    }
}