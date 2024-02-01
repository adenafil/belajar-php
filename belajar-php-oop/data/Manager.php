<?php

class Manager
{
    var string $name;
    public string $title;

    public function __construct(string $name = "", string $title = "Manager")
    {
        $this->name = $name;
        $this->title = $title;
    }

    function sayHello(string $name): void
    {
        echo "Hi $name, my name is Manager $this->name\n";
    }
}

class VicePresident extends Manager
{
    public function __construct(string $name = "", int $age = 0)
    {
        // Tidak wajib, tapi direkomendasikan
        parent::__construct($name, "VP");
    }

    function sayHello(string $name): void
    {
        echo "Hi $name, my name is $this->title $this->name\n";
    }    
}