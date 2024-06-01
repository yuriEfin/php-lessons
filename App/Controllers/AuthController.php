<?php

namespace App\Controllers;

use App\Component\Views\View;

class AuthController extends AbstractController
{
    public function index()
    {
        $title = 'Auth page';
        
        return $this->render(
            'auth',
            [
                'title' => $title,
            ]
        );
    }
}
