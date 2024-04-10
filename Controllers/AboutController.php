<?php

namespace Controllers;

class AboutController
{
    public function index()
    {
        $title = 'About Usssss';
        
        require_once 'Views/about.php';
    }
}
