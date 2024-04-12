<?php

namespace Component\Views;

interface ViewInterface
{
    public static function render(string $template, array $data);
}

interface PhpRenderInterface extends ViewInterface
{
    public static function render(string $template, array $data);
}

interface TwigRenderInterface extends ViewInterface
{
    public static function render(string $template, array $data);
}

class ViewPhp implements PhpRenderInterface
{
    public static function render(string $template, array $data = [])
    {
        extract($data);
        ob_start();
        
        // head
        include $template;
        
        // end
        return ob_get_clean();
    }
}


class ViewTwig implements TwigRenderInterface
{
    private $engine = 'twig';
    
    public static function render(string $template, array $data = [])
    {
        return $this->engine->render($template, $data);
    }
}
