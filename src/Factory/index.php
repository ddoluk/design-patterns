<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Factory\Pizza\PizzaFactory;

$cheesePizza = new PizzaFactory();
$cheesePizza->getOrder('veggie');

$cheesePizza->make();