<?php

namespace Template\Games;


use Common\Utils;
use Template\Abstracts\AGame;

class Football extends AGame
{
    public function initialize()
    {
        Utils::println('Football Game Initialized! Start playing.');
    }

    public function startPlay()
    {
        Utils::println('Football Game Started. Enjoy the game!');
    }

    public function endPlay()
    {
        Utils::println('Football Game Finished!');
    }
}