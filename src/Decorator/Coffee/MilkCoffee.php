<?php

namespace Decorator\Coffee;


use Decorator\Coffee\Interfaces\CoffeeInterface;

class MilkCoffee implements CoffeeInterface
{
    protected $coffee;

    public function __construct(CoffeeInterface $coffee)
    {
        $this->coffee = $coffee;
    }

    public function getCost()
    {
        return $this->coffee->getCost() + 2;

    }

    public function getDescription()
    {
        return $this->coffee->getDescription() . ', milk';
    }

}