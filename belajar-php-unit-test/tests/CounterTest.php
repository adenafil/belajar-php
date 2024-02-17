<?php

namespace ProgrammerZamanNow\Test;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\Attributes\After;
use PHPUnit\Framework\Attributes\Before;
use PHPUnit\Framework\Attributes\Depends;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\Constraint\Count;
use PHPUnit\Framework\TestCase;

class CounterTest extends TestCase
{
    private Counter $counter;
    #[Before]
    public function CreateCounter(): void
    {
        $this->counter = new Counter();
        echo "setup counter : {$this->counter->getCounter()}\n";
    }

    protected function tearDown(): void
    {
        echo "tear down\n";
        // Todo not completed
    }

    #[After]
    public function after()
    {
        echo "after\n";
    }

    public function testIncrement()
    {
        self::assertEquals(0, $this->counter->getCounter());
        self::markTestIncomplete("TODO do increment");
    }

    public function testCounter()
    {
        $this->counter->increment();
        Assert::assertEquals(1, $this->counter->getCounter());

        $this->counter->increment();
        $this->assertEquals(2, $this->counter->getCounter());

        $this->counter->increment();
        self::assertEquals(3, $this->counter->getCounter());

    }


    #[Test]
    public function increment()
    {
        $this->counter->increment();
        self::assertEquals(1, $this->counter->getCounter());
    }

    public function testFirst(): Counter
    {
        $this->counter->increment();
        $this->assertEquals(1, $this->counter->getCounter());
        return $this->counter;
    }

    #[Depends("testFirst")]

    public function testSecond(Counter $counter): void
    {
        $counter->increment();
        $this->assertEquals(2, $counter->getCounter());
    }


}
