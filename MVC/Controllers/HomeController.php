<?php

namespace Controllers;

use Component\Views\View;

class HomeController
{
    public function index()
    {
        return View::render(
            'Views/home.php',
            [
                'title' => 'Home page',
            ]
        );
    }
}
