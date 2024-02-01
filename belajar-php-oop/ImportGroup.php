<?php

require_once "./data/Conflict.php";
require_once "./data/Helper.php";

use Data\One\{Conflict as conflict1, Sample, Dummy};
use function Helper\{helpMe as help};
use const Helper\{APPLICATION as APP};

$conflict1 = new conflict1();
$sample = new Sample();
$dummy = new Dummy();

help();
echo APP . PHP_EOL;
