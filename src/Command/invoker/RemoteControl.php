<?php

namespace Command\Invoker;


use Command\Interfaces\CommandInterface;

class RemoteControl
{
    public function submit(CommandInterface $command)
    {
        $command->undo();
    }
}