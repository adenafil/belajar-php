<?php

$array = [
    "firstName" => "ade",
    "middleName" => "nafil",
    "lastName" => "firmansah"
];

$object = (object) $array;

var_dump($object);

echo $object->firstName . PHP_EOL;
echo $object->middleName . PHP_EOL;
echo $object->lastName . PHP_EOL;

$arrayLagi = (array) $object;

var_dump($arrayLagi);

foreach($arrayLagi as $value)
{
    echo $value . PHP_EOL;
}

require_once "./data/Person.php";

$person = new Person("Ade", "Berau");

$arrayPerson = (array) $person;

var_dump($person);

var_dump($arrayPerson);
