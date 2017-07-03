<?php

namespace Template\Abstracts;


abstract class AGame
{
    abstract public function initialize();

    abstract public function startPlay();

    abstract public function endPlay();

    final public function play()
    {
        $this->initialize();

        $this->startPlay();

        $this->endPlay();
    }
}