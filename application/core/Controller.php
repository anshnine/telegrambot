<?php

namespace application\core;

use application\core\View;

// базовый контроллер
abstract class Controller
{
    public $route;
    public $view;

    public function __construct($route)
    {
        $this->route = $route;
        $this->view = new View($route);
        $this->model=$this->loadModel($route["controller"]);

    }

    // загрузка модели
    public function loadModel(string $name)
    {
        $path = "application\models\\" . ucfirst($name);

        if (class_exists($path)) {

            return new $path;
        }
    }
}