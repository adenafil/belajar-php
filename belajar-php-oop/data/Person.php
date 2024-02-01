<?php

class Person
{
    var ?string $name;
    var ?string $address = null;
    var string $country = "indonesia";

    function sayHello(?string $name): void
    {
        if (is_null($name))
        {
            echo "Hello, my name is {$this->name}\n";
        }
        else
        {
            echo "Hello $name, my name is {$this->name}\n";
        }
    }
}