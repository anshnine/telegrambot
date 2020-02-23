<?php

namespace application\controllers;

use application\core\Controller;

class AuthController extends Controller
{

    // метод входа
    public function loginAction()
    {
        if (!empty($_POST)) {

            $this->view->message("error", "error");
        }
        $this->view->render("Вход");
    }

    // метод регистрации
    public function registrationAction()
    {
        $this->view->render("Регистрация");
    }

}