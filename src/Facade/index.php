<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Facade\ComputerFacade;
use Facade\Computer;

$computerFacade = new ComputerFacade(new Computer());

$computerFacade->on();