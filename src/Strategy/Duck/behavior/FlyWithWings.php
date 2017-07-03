<?php

namespace Strategy\Duck\Behavior;


use Common\Utils;
use Strategy\Duck\Interfaces\FlyBehavior;

class FlyWithWings implements FlyBehavior
{
    public function fly()
    {
        Utils::println('I am fly');
    }
}