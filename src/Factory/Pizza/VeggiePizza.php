<?php

namespace Factory\Pizza;


use Common\Utils;
use Factory\Pizza\Interfaces\PizzaInteface;

class VeggiePizza implements PizzaInteface
{
    public function create()
    {
        Utils::println('create Veggie Pizza');
    }

}