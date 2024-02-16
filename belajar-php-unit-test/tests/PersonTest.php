<?php

namespace ProgrammerZamanNow\Test;

use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
    private Person $person;

    protected function setUp(): void
    {
        $this->person = new Person("Ade");
    }

    public function testSuccess()
    {
        self::assertEquals("Hi Budi, my name is Ade", $this->person->sayHello("Budi"));
    }

    public function testException()
    {
        self::expectException(\Exception::class);
        $this->person->sayHello(null);
    }

    public function testOutput()
    {
        $person = new Person("Ade");
        $this->expectOutputString("Good bye Budi\n");
        $this->person->sayGoodBye("Budi");
    }
}
