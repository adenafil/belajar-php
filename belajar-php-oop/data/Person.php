<?php

class Person
{
    const STUDENT = "Ade Nafil Firmansah";

    var string $name;
    var ?string $address = null;
    var string $country = "indonesia";
    
    public function __construct(string $name, ?string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

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

    function info()
    {
        echo "STUDENT : " . self::STUDENT . PHP_EOL; 
    }
}