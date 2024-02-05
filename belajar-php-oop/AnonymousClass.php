<?php

interface HelloWorld
{
    function sayHello(): void;
}

$helloWorld = new Class("Ade") implements HelloWorld {

    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    function sayHello(): void
    {
        echo "Hello Anonymous Class, i'm $this->name\n";
    }
};

$helloWorld->sayHello();