<?php

namespace application\controllers;

use application\core\Controller;

class AuthController extends Controller
{

    // метод входа
    public function loginAction()
    {
        $this->view->render("Вход");
    }

    // метод регистрации
    public function registrationAction()
    {
        $this->view->render("Регистрация");
    }

}