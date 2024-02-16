<?php

namespace ProgrammerZamanNow\Test;

use \Exception;

class Person
{
    public function __construct(private string $name){}

    /**
     * @throws Exception
     */
    public function sayHello(?string $name): string
    {
        if ($name == null) throw new Exception("Name can'be null");
        return "Hi $name, my name is {$this->name}";
    }
}
