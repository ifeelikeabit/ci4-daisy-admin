<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->setAutoRoute('true');


$routes->add('/', 'Home::index');

$routes->add('user', 'UserController::index');
$routes->add('user/delete/(:any)', 'UserController::delete/$1');
$routes->add('user/(:any)', 'UserController::show/$1');

$routes->get('user/create', function () {
    return view('user/create');
});

$routes->post('user/create', 'UserController::store');
