<?php

namespace Adapter;


use Common\Utils;
use Adapter\Intefaces\ITurkey;

class WildTurkey implements ITurkey
{
    public function gobble()
    {
        Utils::println('Gooble gooble');
    }

    public function fly()
    {
        Utils::println("I'm flying a short distance");
    }

}