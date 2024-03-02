<?php

namespace ProgrammerZamanNow\Belajar\PHP\MVC;

use Monolog\Formatter\JsonFormatter;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Monolog\Processor\GitProcessor;
use Monolog\Processor\HostnameProcessor;
use Monolog\Processor\MemoryUsageProcessor;
use Monolog\Test\TestCase;

class FormatterTest extends TestCase
{
    public function testFormatter()
    {
        $logger = new Logger(FormatterTest::class);

        $handler = new StreamHandler("php://stderr");
        $handler->setFormatter(new JsonFormatter());

        $logger->pushHandler($handler);
        $logger->pushProcessor(new GitProcessor());
        $logger->pushProcessor(new HostnameProcessor());
        $logger->pushProcessor(new MemoryUsageProcessor());

        $logger->info("Belajar PHP Logging", ["username" => "ade"]);
        $logger->info("Belajar PHP Logging Lagi", ["username" => "ade"]);

        self::assertNotNull($logger);
    }
}