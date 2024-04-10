<?php

namespace Controllers;

class AuthController
{
    public function index()
    {
        $title = 'Auth page';
        
        require_once 'Views/auth.php';
    }
}
