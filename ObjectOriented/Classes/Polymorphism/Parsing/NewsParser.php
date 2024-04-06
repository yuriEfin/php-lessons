<?php

namespace ObjectOriented\Classes\Polymorphism\Parsing;

class NewsParser extends Parser
{
    public function parse(): string
    {
        return "NewsParser: <html><head><title></title></head><body>...Парсинг news...";
    }
}
