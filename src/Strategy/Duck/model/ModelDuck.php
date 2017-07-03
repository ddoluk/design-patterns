<?php

namespace Strategy\Duck\Model;


use Common\Utils;
use Strategy\Duck\Abstracts\Duck;
use Strategy\Duck\Behavior\Quack;
use Strategy\Duck\Behavior\FlyWithWings;

class ModelDuck extends Duck
{
    public function __construct()
    {
        $this->flyBehavior = new FlyWithWings();
        $this->quackBehavior = new Quack();
    }

    public function display()
    {
        Utils::println('i am duck');
        $this->performFly();
        $this->performQuack();
    }
}