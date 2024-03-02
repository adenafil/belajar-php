<?php

namespace ProgrammerZamanNow\Belajar\PHP\MVC;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Monolog\Processor\GitProcessor;
use Monolog\Processor\HostnameProcessor;
use Monolog\Processor\MemoryUsageProcessor;
use Monolog\Test\TestCase;

class ResetTest extends TestCase
{
    public function testReset()
    {
        $logger = new Logger(ResetTest::class);
        $logger->pushHandler(new StreamHandler("php://stderr"));
        $logger->pushProcessor(new GitProcessor());
        $logger->pushProcessor(new MemoryUsageProcessor());
        $logger->pushProcessor(new HostnameProcessor());

        for ($i = 0; $i < 10000; $i++) {
            $logger->info("Perulangan ke-$i");
            if ($i % 1 == 0) {
                $logger->reset();
            }
        }

        self::assertNotNull($logger);
    }
}