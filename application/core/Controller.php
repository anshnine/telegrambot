<?php

namespace application\core;

use application\core\View;

// базовый класс
abstract class Controller
{
    public $route;
    public $view;

    public function __construct($route)
    {
        $this->route = $route;
        $this->view = new View($route);
    }
}