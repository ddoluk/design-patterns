<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Command\Reciever\Bulb;
use Command\Commands\TurnOn;
use Command\Commands\TurnOff;
use Command\Invoker\RemoteControl;

$bulb = new Bulb();

$turnOn = new TurnOn($bulb);
$turnOff = new TurnOff($bulb);

$remore = new RemoteControl();

$remore->submit($turnOn);
