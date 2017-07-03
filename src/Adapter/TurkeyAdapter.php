<?php

namespace Adapter;



use Adapter\Intefaces\ITurkey;
use Adapter\Interfaces\IDuck;

class TurkeyAdapter implements IDuck
{
    private $turkey;

    public function __construct(ITurkey $turkey)
    {
        $this->turkey = $turkey;
    }

    public function quack()
    {
        $this->turkey->gobble();
    }

    public function fly()
    {
        $this->turkey->fly();
    }

}