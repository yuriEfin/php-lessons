<?php

namespace Controllers;

use Component\Views\View;

class ContactController
{
    public function index()
    {
        return View::render(
            'Views/contact.php',
            [
                'title' => 'Contact page',
            ]
        );
    }
}
