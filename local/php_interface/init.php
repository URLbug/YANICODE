<?php

define('INCLUDE_PATH', '/include');

function debug(mixed $var)
{
    echo '<pre style="color: white">';

    print_r($var);
    
    echo '</pre>';
}
