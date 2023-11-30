<?php

namespace App\Config;

class Router
{
    private array $routes = ["" => "home page", "contact" => "contact page!"];

    public function register(string $path, callable $action): void
    {
        $this->routes[$path] = $action;
    }

    public function resolve(string $uri): mixed
    {
        
        $path = explode('/', $uri);
        if(array_key_exists(end($path), $this->routes)){
            return $this->routes[end($path)];
        }
        return "Path not found !";
        
    }
}