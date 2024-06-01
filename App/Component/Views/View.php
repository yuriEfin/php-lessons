<?php

namespace App\Component\Views;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class View
{
    private Environment $templateEngine;
    
    public function __construct()
    {
    
    }
    
    public static function render(string $view, array $data = []): string
    {
        return (new self())->templateEngine->render($view . '.html.twig', $data);
    }
    
    public static function renderPhpFile(string $template, array $data = [])
    {
        extract($data);
        ob_start();
        
        // head
        include $template;
        
        // end
        return ob_get_clean();
    }
}
