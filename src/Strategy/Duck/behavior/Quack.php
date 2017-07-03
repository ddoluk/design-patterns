<?php

namespace Strategy\Duck\Behavior;


use Common\Utils;
use Strategy\Duck\Interfaces\QuackBehavior;

class Quack implements QuackBehavior
{
    public function quack()
    {
        Utils::println('Quack');
    }
}