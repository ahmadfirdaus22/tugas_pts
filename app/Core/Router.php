<?php

namespace OOP\app\Core;

class Router
{
    private static $routes = [];
    private static $baseurl ='http://localhost/php2/library2/public/';

    public static function addRoute($method, $path, $controller, $function, $middleware = [])
    {
            self::$routes[] = [
            'method' => $method,
            'path' => $path,
            'controller' => $controller,
            'function' => $function,
            'middleware' => $middleware
        ];
    }
    //https://pastebin.com/BUhAktyv
    public static function url(string $path)
    {
        $baseurl = self::$baseurl ?? "http://localhost";
        return $baseurl.$path;
    }

    public static function redirect($path)
    {
        header("Location: ".self::url($path));
    }

    public static function run()
    {
        // print_r($_SERVER);
        $path = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '/';

        $method = $_SERVER['REQUEST_METHOD'];

        foreach (self::$routes as $route) {
            $pattern = "@^" . preg_replace('/\\\:[a-zA-Z0-9\_\-]+/', '([a-zA-Z0-9\-\_]+)', preg_quote($route['path'])) . "$@D";

            if (preg_match_all($pattern, $path, $variables) && 
            $method == $route['method']) {
                $function = $route['function'];
                $controller = new $route['controller'];
                
                foreach ($route['middleware'] as $middleware)
                {
                    $instance = new $middleware;
                    $instance->before();
                }

                if(is_object($controller) && method_exists($controller, $function))
                {
                    $parameters = [];
                    unset($variables[0]);//removes first param
                    foreach($variables as $var){
                        $parameters[] = array_shift($var);
                    }
                    call_user_func_array([$controller, $function], $parameters);
                }
            }
        }
    }
}
