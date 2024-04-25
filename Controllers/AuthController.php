<?php

namespace Controllers;

use Component\Views\View;

class AuthController
{
    public function index()
    {
        $title = 'Auth page';
        
        return View::render(
            'Views/auth.php',
            [
                'title' => $title,
            ]
        );
    }
}
