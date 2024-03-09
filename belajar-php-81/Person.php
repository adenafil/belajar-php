<?php

class Person
{
    public function __construct(public string $name)
    {
    }

    function sayHello(string $name): string
    {
        return "Hello $name, my name is $this->name";
    }
}

$person = new Person("Ade");

$reference = $person->sayHello(...);

var_dump($reference("nafil"));