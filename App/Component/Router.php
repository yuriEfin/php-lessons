<?php

declare(strict_types=1);

namespace App\Component;

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Route;

class Router
{
    protected RouteCollection $routeCollection;
    
    public function __construct(private array $routes)
    {
        $this->init();
    }
    
    public function match(string $route): array
    {
        $context = new RequestContext();
        // Routing can match routes with incoming requests
        $matcher = new UrlMatcher($this->routeCollection, $context);
        
        return $matcher->match($route);
    }
    
    private function init(): void
    {
        $this->routeCollection = new RouteCollection();
        
        foreach ($this->routes as $path => $data) {
            $routeData = explode('@', $data['handler']);
            $route = new Route($path, ['handler' => $routeData[0], 'action' => $routeData[1]], methods: $data['methods']);
            $this->routeCollection->add($path, $route);
        }
    }
}
