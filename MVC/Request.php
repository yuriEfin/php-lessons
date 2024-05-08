<?php

class Request
{
    public function getHeaders()
    {
        return getallheaders();
    }
    
    public function get($key, $default = null)
    {
        return $_GET[$key] ?? $default;
    }
    
    public function post($key, $default = null)
    {
        return $_POST[$key] ?? $default;
    }
    
    public function files($key)
    {
        return $_FILES[$key] ?? null;
    }
    
    public function cookie($key, $default = null)
    {
        return $_COOKIE[$key] ?? $default;
    }
}
