<?php

require_once __DIR__ . "/../../vendor/autoload.php";

use Observer\FootballTeam\Classes\FootballTeam;
use Observer\FootballTeam\Classes\Player;

$footballTeam = new FootballTeam();

$jhon = new Player('Jhon');
$bill = new Player('Bill');

$footballTeam->attachObserver($jhon);

$footballTeam->attachObserver($bill);

$footballTeam->notify();