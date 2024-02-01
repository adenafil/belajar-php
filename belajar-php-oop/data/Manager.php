<?php

class Manager
{
    var string $name;

    function sayHello(string $name): void
    {
        echo "Hi $name, my name is Manager $this->name\n";
    }
}

class VicePresident extends Manager
{
    function sayHello(string $name): void
    {
        echo "Hi $name, my name is VP $this->name\n";
    }    
}