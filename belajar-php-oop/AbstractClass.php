<?php

require_once "./data/Location.php";

use Data\{Location,  City, Province, Country};

$city = new City();
$province = new Province();
$country = new Country();

function tes(Location $location)
{
    echo $location::class . PHP_EOL;
}

tes(new City());
tes(new Province());
tes(new Country());