<?php

require_once __DIR__ . '/vendor/autoload.php';

use ProgrammerZamanNow\Belajar\Customer;

$customer = new Customer("ade");
echo $customer->sayHello("firmansah") . PHP_EOL;
echo $customer->sayHello() . PHP_EOL;
