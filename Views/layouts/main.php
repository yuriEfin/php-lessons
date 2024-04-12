<?php

$title = 'Процедурный стиль';
function showMetaInfo($title)
{
    return '<meta property="og:title" content="' . $title . '" />';
}

function showScripts()
{
    return '<script src="main.js" rel="stylesheet" />';
}

function showCss()
{
    return '<link src="main.css" rel="stylesheet" />';
}

function showContent()
{
    return 'Пример реализации рендера шаблонов в процедурном стиле!';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <?= showMetaInfo($title); ?>
    <?= showCss(); ?>
</head>
<body>
<?= showContent(); ?>

<?= showScripts(); ?>
</body>
</html>
