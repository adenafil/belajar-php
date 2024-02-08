<?php

function sayHello(Stringable $stringable): void
{
    echo "Hello {$stringable->__toString()}\n";
}

class Person
{
    public function __toString(): string
    {
        return Person::class;
    }
}

sayHello(new Person());