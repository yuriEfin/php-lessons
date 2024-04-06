<?php

namespace ObjectOriented\Classes\Abstraction\Parsing;

// конкретная реализация парсера
class NewsParser extends Parser
{
    public function parse(): string
    {
        return "NewsParser: <html><head><title></title></head><body>...Парсинг news...";
    }
}
