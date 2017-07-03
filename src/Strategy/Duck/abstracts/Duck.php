<?php

namespace Strategy\Duck\Abstracts;


use Common\Utils;
use Strategy\Duck\Interfaces\FlyBehavior;
use Strategy\Duck\Interfaces\QuackBehavior;

abstract class Duck
{
    protected $flyBehavior;
    protected $quackBehavior;

    public function performFly()
    {
        $this->flyBehavior->fly();
    }

    public function performQuack()
    {
        $this->quackBehavior->quack();
    }

    public function swim()
    {
        Utils::println('All ducks float, even decoys!');
    }

    public function setFlyBehavior(FlyBehavior $flyBehavior)
    {
        $this->flyBehavior = $flyBehavior;
    }

    public function setQuackBehavior(QuackBehavior $quackBehavior)
    {
        $this->quackBehavior = $quackBehavior;
    }

    public abstract function display();
}