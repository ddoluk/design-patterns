<?php

namespace Factory\Pizza;


class PizzaFactory
{
    protected $pizza;

    public function getOrder($pizza)
    {
        switch ($pizza) {
            case 'cheese':
                $this->pizza = new CheesePizza();
                break;
            case 'veggie':
                $this->pizza = new VeggiePizza();
                break;
        }
    }


    public function make()
    {
        $this->pizza->create();
    }

}