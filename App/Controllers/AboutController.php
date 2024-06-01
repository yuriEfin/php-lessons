<?php

namespace App\Controllers;

use App\Component\Views\View;

class AboutController extends AbstractController
{
    // $data = [login => '', password => ''];
    public function index()
    {
        // 1. проверка входных данных
        return $this->render(
            'about',
            [
                'title' => 'About',
            ]
        );
    }
}
