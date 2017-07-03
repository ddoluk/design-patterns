<?php

require_once __DIR__ . "/../../vendor/autoload.php";

use Strategy\Duck\Model\ModelDuck;

$duck = new ModelDuck();

$duck->display();