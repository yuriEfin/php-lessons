<?php

namespace Component\Views;

class View
{
    public static function render(string $template, array $data = [])
    {
        extract($data);
        ob_start();
        
        // head
        include $template;
        
        // end
        return ob_get_clean();
    }
}
