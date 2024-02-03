<?php

namespace Data\Traits;

trait SayGoodBye
{
    public function goodBye(?string $name): void
    {
        if (is_null($name))
        {
            echo "Good Bye\n";
        }
        else
        {
            echo "Good Bye $name\n";
        }
    }
}

trait SayHello
{
    public function hello(?string $name): void
    {
        if (is_null($name))
        {
            echo "Hello\n";
        }
        else
        {
            echo "Hello $name\n";
        }
    }
}

trait HasName
{
    public string $name;
}

class Person
{
    use SayHello, SayGoodBye, HasName;
}