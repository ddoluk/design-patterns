<?php

namespace Observer\FootballTeam\Classes;


use Observer\FootballTeam\Intefaces\ObserverInterface;
use Observer\FootballTeam\Intefaces\SubjectInteface;

class FootballTeam implements SubjectInteface
{
    private $observers = [];

    public function attachObserver(ObserverInterface $observer)
    {
        array_push($this->observers, $observer);
    }

    public function detachObserver(ObserverInterface $observer)
    {
        $index = array_search($observer, $this->observers);

        unset($this->observers[$index]);
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update();
        }
    }
}