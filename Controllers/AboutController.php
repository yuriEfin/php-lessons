<?php

namespace Controllers;

use Component\Views\View;

class AboutController
{
    // $data = [login => '', password => ''];
    public function index()
    {
        // 1. проверка входных данных
        return View::render(
            'Views/about.php',
            [
                'title' => 'About',
            ]
        );
    }
}
