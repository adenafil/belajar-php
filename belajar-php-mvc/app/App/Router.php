<?php

namespace ProgrammerZamanNow\Belajar\PHP\MVC\App;

class Router
{
    private static array $routes = [];

    public static function add(string  $method,
                                string $path,
                                string $controller,
                                string $function
                                ): void
    {
        self::$routes[] = [
            'method' => $method,
            'path' => $path,
            'controller' => $controller,
            'function' => $function
        ];
    }

    public static function run(): void
    {
        $path = "/";
        // Mengecek apakah di web nya ada path info
        if (isset($_SERVER['PATH_INFO'])) $path = $_SERVER['PATH_INFO'];
        $method = $_SERVER['REQUEST_METHOD'];

        // jika ada, cek dulu apakah di array routes memiliki path tersebut
        foreach (self::$routes as $route)
        {
            // Jika ada yah masuk sini
            if ($path == $route['path'] && $method == $route['method'])
            {
//                echo "CONTROLLER : " . $route['controller'] . ", FUNCTION : " . $route['function'];
//                echo "</br>method : " . $route['method'] . ", path : " . $route['path'];

                $controller = new $route['controller'];

                $function = $route['function'];
                $controller->$function();

                return;
            }
        }

        // Kalau gk ada masuk sini
        http_response_code(404);
        echo "CONTROLLER NOT FOUND";
    }
}