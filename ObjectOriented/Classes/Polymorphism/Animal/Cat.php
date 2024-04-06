<?php

namespace ObjectOriented\Classes\Polymorphism\Animal;

class Cat implements AnimalInterface
{
    public function makeSound(): string
    {
        return 'мяу-мяу';
    }
}
