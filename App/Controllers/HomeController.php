<?php

namespace App\Controllers;

use App\Component\Views\View;

class HomeController extends AbstractController
{
    public function index()
    {
        $users = json_decode(file_get_contents(dirname(__DIR__) . '/resources/myData.json'), true);
        
        return $this->render(
            'home',
            [
                'title' => 'Home page 2',
                'users' => $users,
            ]
        );
    }
}
