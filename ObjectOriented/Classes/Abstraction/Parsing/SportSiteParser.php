<?php

namespace ObjectOriented\Classes\Abstraction\Parsing;

// конкретная реализация парсера
class SportSiteParser extends Parser
{
    public function parse(): string
    {
        return "SportSite: <html><head><title></title></head><body>...Парсинг спортивных сайтов...";
    }
}
