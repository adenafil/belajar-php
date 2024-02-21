<?php

namespace ProgrammerZamanNow\Belajar\PHP\MVC\MIddleware;

interface Middleware
{
    function before(): void;
}