<?php

class Person
{
    var string $name;
    var ?string $address = null;
    var string $country = "indonesia";

    function sayHello(string $name): void
    {
        echo "Hello $name\n";
    }
}