<?php

$router = $di->getRouter();

// Define your routes here

$router->handle();

$di->set('router', function () {
    $router = new \Phalcon\Mvc\Router();
    // $router->notFound(['controller' => 'Home', 'action'=> 'about']);

    $router->setDefaultController('Home');
    $router->setDefaultAction('index');

    return $router;
});