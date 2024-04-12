<?php

namespace Controllers;

use Component\Auth\AuthInterface;
use Component\Views\PhpRenderInterface;
use Component\Views\TwigRenderInterface;
use Component\Views\View;
use Component\Views\ViewPhp;
use Models\AboutForm;

class AboutController
{
    private AuthInterface $auth;
    
    public function __construct(AuthInterface $auth)
    {
        $this->auth = $auth;
    }
    
    // $data = [login => '', password => ''];
    public function index(PhpRenderInterface $view, \Request $request)
    {
        $request->get('login');
        $request->get('password');
        // 1. проверка входных данных
        $form = new AuthForm(login, password);
        if (!$form->validate()) {
            return $view::render('errors', ['errors' => $form->getErrors()]);
        }
        
        if (!$this->auth->auth(login, password)) {
            return View::render('errors', ['errors' => $this->auth->showErrors()]);
        }
        
        $title = 'About Usssss';
        $products = new Product::findAll('About form', 10);
        
        return View::render(
            'Views/about.php',
            [
                'title'    => $title,
                'products' => $products,
            ]
        );
    }
    
    public function index(TwigRenderInterface $view)
    {
    }
}
