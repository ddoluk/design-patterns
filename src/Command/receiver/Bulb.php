<?php

namespace Command\Reciever;


use Common\Utils;

class Bulb
{
    public function turnOn()
    {
        Utils::println('Bulb has been lit');
    }

    public function turnOff()
    {
        Utils::println('Darkness!');
    }
}