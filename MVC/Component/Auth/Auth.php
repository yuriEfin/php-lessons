<?php

namespace Component\Auth;

interface ShowErrorsInterface
{
    public function showErrors(): array;
}

interface AuthInterface extends ShowErrorsInterface
{
    public function auth(
        string $login,
        $password
    ): bool;
}

class UserReportory
{
    // 1. Делаем запрос в БД - проверяем есть или нет такой пользователь по login + хеш пароля
    public function getUserByLoginAndPassword(string $login, string $password): ?User
    {
        return User::findOne(['login' => $login, 'password' => $password]);
    }
}

class User
{
    public $username;
    public $email;
    public $passwd;
}

class Auth implements AuthInterface
{
    private UserReportory $userRepository;
    public array          $errors = [];
    
    public function __construct(UserReportory $userReportory)
    {
        $this->userRepository = $userReportory;
    }
    
    public function auth(string $login, $password): bool
    {
        // 1. Делаем запрос в БД - проверяем есть или нет такой пользователь по login + хеш пароля
        $user = $this->userRepository->getUserByLoginAndPassword($login, $password);
        
        return true;
        // 1. Успех авторизации + старт сессии session_start()
        // 1. или выдаем ошибку если не нашли пользователя в бд
    }
    
    public function showErrors(): array
    {
        return $this->errors;
    }
}

