<?php

namespace App;

use App\Component\ContainerTrait;
use App\Component\Router;
use DI\Container;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Throwable;

class Application
{
    use ContainerTrait;
    
    protected          $id;
    protected          $name;
    protected          $version;
    protected          $debug;
    protected          $env;
    protected Router   $router;
    protected Request  $request;
    protected Response $response;
    
    public function __construct(private array $config)
    {
        dd($GLOBALS);
        foreach ($this->config as $property => $value) {
            if (property_exists($this, $property)) {
                $this->$property = $value;
                unset($this->config[$property]);
            }
        }
        $this->request = Request::createFromGlobals();
        $this->response = new Response();
        
        $this->preInit();
    }
    
    public function handleRequest(): int
    {
        $params = $this->router->match($this->request->getPathInfo());
        $handler = $this->createController($params['handler']);
        $action = $params['action'];
        $content = $handler->$action();
        
        try {
            $this->response
                ->setContent($content)
                ->setStatusCode(200)
                ->send();
        } catch (Throwable $e) {
            $this->response
                ->setStatusCode($e->getCode() > 0 ? $e->getCode() : 500)
                ->setContent($e->getCode());
            $this->response->headers->set('X-App-error', date('Y-m-d H:i:s'));
        }
        
        return 0;
    }
    
    private function preInit(): void
    {
        $this->createDi();
        $this->initMainServices();
        $this->router = new Router($this->config['routes'] ?? []);
    }
    
    private function createController($controller)
    {
        return $this->resolveDependencies($controller);
    }
    
    private function initMainServices(): void
    {
        $definitions = array_merge(
            [
                Request::class  => function (Container $c) {
                    return $this->request ?? Request::createFromGlobals();
                },
                Response::class => function (Container $c) {
                    return $this->response ?? new Response();
                },
            ],
            $this->config['definitions'] ?? []
        );
        
        $this->setDiDefinitions($definitions);
    }
}
