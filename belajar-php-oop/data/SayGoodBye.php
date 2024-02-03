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

trait CanRun
{
    public abstract function run(): void;
}

class ParentPerson
{
    public function goodBye(?string $name): void
    {
        echo "Good bye in Person\n";
    }

    public function hello(?string $name): void
    {
        echo "Hello in Person\n";
    }

}

class Person
{
    use SayHello, SayGoodBye, HasName, CanRun
    {
        // bisa dioverride access modifiernya
        // hello as private;
        // goodbye as private;
    }

    public function run(): void
    {
        echo "Person $this->name is running\n";
    }

    // public function goodBye(?string $name): void
    // {
    //     echo "Good bye in Person\n";
    // }

    // public function hello(?string $name): void
    // {
    //     echo "Hello in Person\n";
    // }


}
