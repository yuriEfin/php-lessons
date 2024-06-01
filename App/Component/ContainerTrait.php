<?php

namespace App\Component;

use DI\Container;
use DI\ContainerBuilder;

trait ContainerTrait
{
    protected ?Container $container = null;
    
    protected function createDi(): Container
    {
        if (!$this->container) {
            $builder = new ContainerBuilder();
            $this->container = $builder
                ->useAttributes(true)
                ->useAutowiring(false)
                ->build();
        }
        
        return $this->container;
    }
    
    protected function resolveDependencies(string $definition)
    {
        return $this->container->get($definition);
    }
    
    protected function setDiDefinitions(array $definitions): void
    {
        foreach ($definitions as $definition => $concrete) {
            $this->container->set($definition, $concrete);
        }
    }
}
