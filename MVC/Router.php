<?php

class Router
{
    protected $routes;
    
    public function __construct($routes)
    {
        $this->routes = $routes;
    }
    
    public function handleRequest()
    {
        $path = $_SERVER['REQUEST_URI'];
        if (array_key_exists($path, $this->routes)) {
            $controllerInfo = explode('@', $this->routes[$path]);
            $controllerName = $controllerInfo[0];
            $method = $controllerInfo[1];
            $className = 'Controllers\\' . $controllerName;
            $controller = new $className();
            $controller->$method();
        } else {
            // Handle 404
            echo '404 Not Found';
        }
    }
}
