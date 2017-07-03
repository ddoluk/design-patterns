<?php

namespace Strategy\Duck\Behavior;


use Common\Utils;
use Strategy\Duck\Interfaces\QuackBehavior;

class Squeak implements QuackBehavior
{
    public function quack()
    {
        Utils::println('Squeak');
    }

}