<?php

require_once __DIR__.'/../../vendor/autoload.php';

use Adapter\WildTurkey;
use Adapter\TurkeyAdapter;

$duck = new TurkeyAdapter(new WildTurkey());

$duck->quack();
$duck->fly();
