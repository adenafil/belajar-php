<?php

namespace ProgrammerZamanNow\Belajar\PHP\MVC;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Monolog\Test\TestCase;

class LoggingTest extends TestCase
{
    public function testLogging()
    {
        $logger = new Logger(LoggingTest::class);

        $logger->pushHandler(new StreamHandler('php://stderr'));
        $logger->pushHandler(new StreamHandler(__DIR__ . "/../application.log"));

        $logger->info("Belajar Pemrograman PHP Logging");
        $logger->info("Selamat datang di Programmer Zaman Now");
        $logger->info("Ini Informasi Aplikasi Logging");

        self::assertNotNull($logger);
    }
}