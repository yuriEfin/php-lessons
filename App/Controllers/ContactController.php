<?php

namespace App\Controllers;

use App\Component\Views\View;

class ContactController extends AbstractController
{
    public function index()
    {
        return $this->render(
            'contact',
            [
                'title' => 'Contact page',
            ]
        );
    }
}
