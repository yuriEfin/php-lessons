<?php

if (!function_exists('dump')) {
    function dump($var, $label = '')
    {
        echo $label . '<br>';
        echo '<pre>';
        echo var_export($var, true) . '<br>';
        echo '</hr>';
    }
}
