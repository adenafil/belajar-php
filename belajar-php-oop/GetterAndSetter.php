<?php

require_once "data/Cetagory.php";

$cetagory = new Cetagory();
$cetagory->setName("Handphone");
$cetagory->setExpensive(true);


$cetagory->setName("            ");
echo "Name : {$cetagory->getName()}\n";
echo "Expensive : {$cetagory->isExpensive()}\n";
