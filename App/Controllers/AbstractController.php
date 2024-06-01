<?php

namespace App\Controllers;

use DI\Attribute\Inject;
use Symfony\Component\HttpFoundation\Request;
use Twig\Environment;

abstract class AbstractController
{
    #[Inject]
    private Request     $request;
    #[Inject]
    private Environment $templateEngine;
    
    public function render(string $view, array $data = []): string
    {
        return $this->templateEngine->render($view . '.html.twig', $data);
    }
}
