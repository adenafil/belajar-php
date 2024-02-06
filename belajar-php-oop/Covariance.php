<?php

use \Data\{Animal, AnimalShelter, CatShelter, DogShelter, Cat, Dog};

require_once "./data/AnimalShelter.php";
require_once "./data/Animal.php";
require_once "./data/Food.php";

$catShelter = new CatShelter();
$cat = $catShelter->adopt("Lucy");
$cat->eat(new \Data\AnimalFood());


$dogShelter = new DogShelter();
$dog = $dogShelter->adopt("Agus");
$dog->eat(new \Data\Food());