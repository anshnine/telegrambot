<?php

namespace application\core;

class Router
{

    protected $routes = [];
    protected $params = [];

    // функция автоматически выполняющаяся при вызове класса
    function __construct()
    {
        $array = require "application/config/routes.php";

        foreach ($array as $item => $value) {
            $this->addRoute($item, $value);
        }
    }

    // добавление маршрута
    public function addRoute(string $route, array $params)
    {
        $route = "#^" . $route . "$#";
        $this->routes[$route] = $params;
    }

    // проверка на наличие маршрута
    public function matchRoute()
    {
        $url = trim($_SERVER["REQUEST_URI"], "/");

        foreach ($this->routes as $route => $params) {
            if (preg_match($route, $url, $mathes)) {
                $this->params = $params;
                return true;
            }
        }
        return false;
    }


    public function run()
    {
        if ($this->matchRoute()) {

            $path = "application\controllers\\" . ucfirst($this->params["controller"]) . "Controller";

            // проверка на существование класса
            if (class_exists($path)) {

                $action = $this->params["action"] . "Action";

                // проверка на существование метода
                if (method_exists($path, $action)) {

                    $controller = new $path($this->params);
                    $controller->$action();

                } else {
                    View::errorCode(404);
                }
            } else {
                View::errorCode(404);
            }
        } else {

            View::errorCode(404);
        }
    }

}