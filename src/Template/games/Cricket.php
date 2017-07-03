<?php

namespace Template\Games;


use Common\Utils;
use Template\Abstracts\AGame;

class Cricket extends AGame
{
    public function initialize()
    {
        Utils::println('Cricket Game Initialized! Start playing.');
    }

    public function startPlay()
    {
        Utils::println('Cricket Game Started. Enjoy the game!');
    }

    public function endPlay()
    {
        Utils::println('Cricket Game Finished!');
    }
}