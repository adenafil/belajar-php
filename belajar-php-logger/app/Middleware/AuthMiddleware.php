<?php

namespace ProgrammerZamanNow\Belajar\PHP\MVC\Middleware;

class AuthMiddleware implements MiddleWare
{
    function before(): void
    {
        session_start();
        if (!isset($_SESSION['user']))
        {
            header('Location: /login');
            exit();
        }
    }
}