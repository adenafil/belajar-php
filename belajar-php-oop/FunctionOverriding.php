<?php

require_once "./data/Manager.php";

$manager = new Manager("", "");
$manager->name = "budiyanto";
$manager->sayHello("mandra");

$vp = new VicePresident();
$vp->name = "mandra";
$vp->sayHello("budi");