<?php

// маршруты
return
    [
        "telegrambot" => [
            "controller" => "main",
            "action" => "index",
        ],

        "telegrambot/message/getMessage" => [
            "controller" => "message",
            "action" => "getMessage",
        ],

        "telegrambot/auth/login" => [
            "controller" => "auth",
            "action" => "login",
        ],

        "telegrambot/auth/registration" => [
            "controller" => "auth",
            "action" => "registration",
        ],
    ];