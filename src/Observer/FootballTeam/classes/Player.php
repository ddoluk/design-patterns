<?php

namespace Observer\FootballTeam\Classes;


use Common\Utils;
use Observer\FootballTeam\Intefaces\ObserverInterface;

class Player implements ObserverInterface
{
    private $playerName;

    public function __construct($palayerName)
    {
        $this->playerName = $palayerName;
    }

    public function update()
    {
        Utils::println("added new player by name " . $this->getPlayerName());
    }

    private function getPlayerName()
    {
        return $this->playerName;
    }
}