<?php

namespace Facade;

use Common\Utils;

class Computer
{
    public function turnOn()
    {
        Utils::println('computer on');
    }

    public function turnOff()
    {
        Utils::println('computer off');
    }
}