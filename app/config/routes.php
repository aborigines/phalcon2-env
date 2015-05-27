<?php

use \Phalcon\Mvc\Router;

$router = new Router();

$router->setUriSource(Router::URI_SOURCE_GET_URL); // use $_GET['_url'] (default)
$router->setUriSource(Router::URI_SOURCE_SERVER_REQUEST_URI); // use $_SERVER['REQUEST_URI'] (default)

$router->setDefaultNamespace('App\Controllers');

$router->add(
    '/',
    [
        'controller' => 'index',
        'action'     => 'index',
    ]
);

$router->add(
    '/login',
    [
        'controller' => 'auth',
        'action'     => 'login',
    ]
);

$router->add(
    '/logout',
    [
        'controller' => 'auth',
        'action'     => 'logout',
    ]
);

/* 
 * error 
*/
$router->notFound(
    [
    'controller' => 'errors',
    'action'     => 'show404',
    ]
);

$router->handle();