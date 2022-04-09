<?php

return [
    '/' => \App\MyControllers\MainController::class,
    '/todo' => \App\MyControllers\TodoController::class,
    '/not-found' =>  \App\MyControllers\NotFoundController::class,
    '/authorization' => \App\MyControllers\AuthorizationController::class,
    '/registeration' => \App\MyControllers\RegistrationController::class,
];