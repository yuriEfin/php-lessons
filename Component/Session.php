<?php

namespace Component;

class Session
{
    public function __construct()
    {
        session_start();
    }
    
    public function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }
    
    public function get($key, $default = null)
    {
        return $_SESSION[$key] ?? $default;
    }
    
    public function remove($key)
    {
        unset($_SESSION[$key]);
    }
}
