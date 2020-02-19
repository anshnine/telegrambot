<?php

require "application/lib/dev.php";

use application\core\Router;
use application\lib\Db;

// автозагрузка класса роутер
spl_autoload_register(function ($class) {
    $path = str_replace('\\', '/', $class . ".php");
    if (file_exists($path)) {
        require $path;
    }
});

session_start();