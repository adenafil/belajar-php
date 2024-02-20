<?php

namespace ProgrammerZamanNow\Belajar\PHP\MVC\Controller;

class HomeController
{
    function index(): void
    {
        $model = [
            "title" => "Belajar PHP MVC",
            "content" => "Selamat Belajar PHP MVC dari PZN"
        ];
        echo "HomeController.index()";
    }

    function hello(): void
    {
        echo "HomeController.hello()";
    }

    function world(): void
    {
        echo "HomeController.world()";
    }

    function about(): void
    {
        echo "Author : Ade Nafil Firmansah";
    }

    function login(): void
    {
        $request = [
            "username" => $_POST['username'],
            "password" => $_POST['password'],
        ];

        $user = [

        ];

        $response = [
            "message" => "Login Sukses"
        ];
        // Kirimkan responsenya ke view
    }
}