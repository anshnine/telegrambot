<?php

// отображение ошибок
ini_set('display_errors', 1);
error_reporting(E_ALL);

// дебаг в лог файл
function debug($object)
{
    ob_start();
    print_r($object);
    $contents = ob_get_contents();
    ob_end_clean();
    error_log($contents, 3, "./var/logs/debug.log");
}
