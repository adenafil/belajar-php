<?php

require_once "data/Animal.php";

use Data\{Cat, Dog, Animal};

$cat = new Cat();
$cat->name = "luna";
$cat->run();

$dog = new Dog();
$dog->name = "cokro";
$dog->run();

hi($cat);
hi($dog);

function hi(Animal $animal): void
{
    echo "hi my name is $animal->name\n";
}


