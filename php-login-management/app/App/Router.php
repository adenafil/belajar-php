<?php

namespace ProgrammerZamanNow\Belajar\PHP\MVC\App;

class Router
{
    private static array $routes = [];

    public static function add(string  $method,
                                string $path,
                                string $controller,
                                string $function,
                                array $middlewares = []
                                ): void
    {
        self::$routes[] = [
            'method' => $method,
            'path' => $path,
            'controller' => $controller,
            'function' => $function,
            'middleware' => $middlewares
        ];
    }

    public static function run(): void
    {
        // default valuenya
        $path = "/";
        // Mengecek apakah di web nya ada path info
        if (isset($_SERVER['PATH_INFO'])) $path = $_SERVER['PATH_INFO'];
        $method = $_SERVER['REQUEST_METHOD'];

        // jika ada, cek dulu apakah di array routes memiliki path tersebut
        foreach (self::$routes as $route)
        {
            // pattern regex
            $pattern = "#^" . $route['path'] . "$#";

            // Jika ada yah masuk sini
            if (preg_match($pattern, $path, $variables) && $method == $route['method'])
            {
                // call middleware

                foreach ($route['middleware'] as $middleware)
                {
                    $instance = new $middleware;
                    $instance->before();
                }

                $controller = new $route['controller'];

                $function = $route['function'];

                array_shift($variables);

                // ProductController->cetagories(variables[0], vairables[1]);
//                $controller->$function($variables[0], $variables[1]);

                call_user_func_array([$controller, $function], $variables);

                return;
            }
        }

        // Kalau gk ada masuk sini
        http_response_code(404);
        echo "CONTROLLER NOT FOUND";
    }
}