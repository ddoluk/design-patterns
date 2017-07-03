<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Decorator\Coffee\SimpleCoffee;
use Decorator\Coffee\MilkCoffee;

$milkCoffee = new MilkCoffee(new SimpleCoffee());

echo $milkCoffee->getDescription();
echo $milkCoffee->getCost();
