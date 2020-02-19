<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

function debug($var)
{
    echo "<pre>";
    file_put_contents("var/logs/debug.log", print_r($var, true));
    echo "</pre>";


}

