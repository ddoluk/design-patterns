<?php

namespace Command\Commands;


use Command\Reciever\Bulb;
use Command\Interfaces\CommandInterface;

class TurnOff implements CommandInterface
{
    protected $bulb;

    public function __construct(Bulb $bulb)
    {
        $this->bulb = $bulb;
    }

    public function execute()
    {
        $this->bulb->turnOff();
    }

    public function undo()
    {
        $this->bulb->turnOn();
    }

    public function redo()
    {
        $this->execute();
    }

}