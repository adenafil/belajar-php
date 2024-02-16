<?php

namespace ProgrammerZamanNow\Test;

use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
    public function testSuccess()
    {
        $person = new Person("Ade");
        self::assertEquals("Hi Budi, my name is Ade", $person->sayHello("Budi"));
    }

    public function testException()
    {
        $person = new Person("Ade");
        self::expectException(\Exception::class);
        $person->sayHello(null);
    }
}
