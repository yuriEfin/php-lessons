# использование

# example 1 - юзаем через функцию в глобальной области видимости

```php

use ObjectOriented\Classes\Polymorphism\Parsing\Parser;
use ObjectOriented\Classes\Polymorphism\Parsing\ShopParser;
use ObjectOriented\Classes\Polymorphism\Parsing\NewsParser;

// но также можно определить и метод в каком-то классе и использовать точно так же
function parse(Parser $parser) 
{
    // мы не знаем какой именно Парсер пришел на вход и нам это не надо
    // нам достаточно знать какой метод нам доступен чтобы распарсить сайт
    return $parser->parse(); 
}

// вызов
parse(new ShopParser());
parse(new NewsParser());
```

# example 2

### Например, у нас будет несколько парсеров обходить одну и ту же страницу, но каждый будет собирать свои данные

```php

$url = 'https://mysite.com/page-for-parsing';
$parsers = [
    new ShopParser($url),
    new NewsParser($url),
];

foreach ($parsers as $parser) {
    // проверимся что нам в $parser положили то что и требовалось и вызовем метод ->parse()
    if (!$parser instanceof Parser) {
        // кидаем ошибку так как в случае если нам дали иной объект, то нет гарантии,
        // что в нем есть метод ->parse() и может быть ошибка обращения к несуществующему методу
        throw new Exception(sprintf('Парсер должен являться экземпляром: %s', Parser::class));
    }    
    $htmlData[get_class($parser)] = $parser->parse();
}
```
