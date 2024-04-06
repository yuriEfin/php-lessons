<?php

namespace ObjectOriented\Classes\Polymorphism\Animal;

class Dog implements AnimalInterface
{
    public function makeSound(): string
    {
        return 'гав-гав';
    }
}
