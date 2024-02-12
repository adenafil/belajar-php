<?php

require_once __DIR__ . "/vendor/autoload.php";
use ProgrammerZamanNow\Data\People;

$people = new People("Ade");

echo $people->sayHello("nafil") . PHP_EOL;
