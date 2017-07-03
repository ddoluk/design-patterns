<?php

namespace Strategy\Duck\Behavior;


use Common\Utils;
use Strategy\Duck\Interfaces\FlyBehavior;

class FlyNoWay implements FlyBehavior
{
    public function fly()
    {
        Utils::println('I can\'t fly');
    }
}