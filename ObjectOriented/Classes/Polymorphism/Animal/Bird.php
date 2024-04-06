<?php

namespace ObjectOriented\Classes\Polymorphism\Animal;

class Bird implements AnimalInterface
{
    public function makeSound(): string
    {
        return 'чирик-чирик';
    }
}
