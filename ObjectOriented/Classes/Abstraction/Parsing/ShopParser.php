<?php

namespace ObjectOriented\Classes\Abstraction\Parsing;

// конкретная реализация парсера
class ShopParser extends Parser
{
    public function parse(): string
    {
        return "ShopParser: <html><head><title></title></head><body>...Парсинг shops...";
    }
}
