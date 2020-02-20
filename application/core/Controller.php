<?php

namespace application\core;

// базовый класс
abstract class Controller
{
    public $route;


    public function __construct($route)
    {
        $this->route = $route;
    }

}