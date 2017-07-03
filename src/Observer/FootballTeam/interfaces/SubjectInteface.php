<?php

namespace Observer\FootballTeam\Intefaces;


interface SubjectInteface
{
    public function attachObserver(ObserverInterface $observer);

    public function detachObserver(ObserverInterface $observer);

    public function notify();
}