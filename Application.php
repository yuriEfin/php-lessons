<?php

use Couchbase\View;

class Application
{
    protected $id;
    protected $name;
    protected $version;
    protected $debug;
    protected $env;
    protected $routes = [];
    
    public function __construct(array $config)
    {
        foreach ($config as $property => $value) {
            if (property_exists($this, $property)) {
                $this->$property = $value;
            }
        }
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
            require __DIR__ . '/Views/layouts/head.php';
            echo $controller->$method();
            require __DIR__ . '/Views/layouts/end.php';
        } else {
            // Handle 404
            echo '404 Not Found';
        }
    }
}
