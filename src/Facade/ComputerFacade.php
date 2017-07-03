<?php

namespace Facade;


class ComputerFacade
{
    private $computer;

    public function __construct(Computer $computer)
    {
        $this->computer = $computer;
    }

    public function on()
    {
        $this->computer->turnOn();
    }

    public function off()
    {
        $this->computer->turnOff();
    }
}