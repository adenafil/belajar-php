<?php

require_once  __DIR__ . '/../vendor/autoload.php';

use ProgrammerZamanNow\Belajar\PHP\MVC\App\Router;

Router::add('GET', '/', 'HomeController', 'index');
Router::add('GET', '/hello', 'HelloController', 'hello');
Router::add('GET', '/world', 'WorldoController', 'world');

Router::run();