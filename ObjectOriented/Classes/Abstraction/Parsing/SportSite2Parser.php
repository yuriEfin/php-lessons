<?php

namespace ObjectOriented\Classes\Abstraction\Parsing;

// конкретная реализация парсера
class SportSite2Parser extends Parser
{
    public function parse(): string
    {
        return "SportSiteParser: <html><head><title></title></head><body>...Парсинг спортивных сайтов...";
    }
}
