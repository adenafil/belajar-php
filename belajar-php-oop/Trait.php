<?php

require "./data/SayGoodBye.php";

use Data\Traits\{Person, SayGoodBye, SayHello};

$person = new Person();

$person->goodBye("ade");
$person->hello("ade");

$person->name = "ade";

echo $person->name . PHP_EOL;
$person->run();