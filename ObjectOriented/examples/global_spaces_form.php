<?php

//declare(strict_types=1);
ini_set('display_errors', 'On');
error_reporting(E_ALL);

class User
{
    public const string SALT = ';sdfsdf345m,lgdfg#54o54-0zcv';
    public int    $id;       // Публичное свойство класса
    public string $username; // Публичное свойство класса
    public string $password; // Публичное свойство класса
}

$user = new User();
$user->username = "php-gambit"; // Изменение публичного свойства
$user->password = "asdasd";
$user->id = "1";
echo '<pre>';
var_export($user);
?>

<html lang="">
<body>
<head>
    <title>Page form</title>
    <link rel="stylesheet" href="/resources/main.css">
</head>
<form>
    <div>
        <label for="username">Username</label><br>
        <input id="username" type="text" name="username" value="<?= $user->username ?>">
    </div>
    <div>
        <label for="password">Password</label><br>
        <input id="password" type="password" name="password" value="<?= $user->password ?>">
    </div>
    <div>
        <input type="submit" value="Отправить">
    </div>
</form>
</body>
</html>

