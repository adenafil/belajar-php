<?php

require_once "./data/Person.php";

$ade = new Person();
$ade->name = "ade";
$ade->address = "berau";

$ade->sayHello("roger");

$roger = new Person();
$roger->name = "roger sumatra";
$roger->address = "berau";

$roger->sayHello(null);