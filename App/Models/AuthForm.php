<?php

namespace App\Models;

class AuthForm
{
    public array  $errors = [];
    public string $username;
    public string $password;
    
    public function validate()
    {
        // код для валидации свойств модели...
        return true; // или false если валидация провалилась
    }
}
