<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Singleton\Pattern\Singleton;

$one = Singleton::getInstance();
$two = Singleton::getInstance();

var_dump($one === $two);