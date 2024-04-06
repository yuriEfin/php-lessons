<?php

namespace ObjectOriented\Classes\Polymorphism\Transport;

class Auto implements TransportInterface
{
    public function move(): string
    {
        return 'Auto едет';
    }
}
