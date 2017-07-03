<?php

namespace Command\Interfaces;

interface CommandInterface
{
    public function execute();

    public function undo();

    public function redo();
}