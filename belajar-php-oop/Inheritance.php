<?php

require_once "./data/Manager.php";

$manager = new Manager("", "");
$manager->name = "Budi";
$manager->sayHello("Joko");

$vp = new VicePresident();
$vp->name = "Rooney";
$vp->sayHello("Joko");