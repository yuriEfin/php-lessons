<?php

namespace ObjectOriented\Classes\Polymorphism\Transport;

class Plain implements TransportInterface
{
    public function move(): string
    {
        return 'Plain летит';
    }
}
