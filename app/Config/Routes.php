<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setAutoRoute('true');


$routes->add('/', 'Home::index');

//User
$routes->add('user', 'UserController::index');
$routes->add('user/delete/(:any)', 'UserController::delete/$1');
$routes->add('user/(:any)', 'UserController::show/$1');
$routes->get('user/create', 'UserController::createview');
$routes->post('user/create', 'UserController::store');
$routes->get('user/(:any)/edit', 'UserController::edit/$1');
$routes->post('user/(:any)/edit', 'UserController::save/$1');



$routes->get('page', 'PageController::index');

$routes->get('page/create', 'PageController::create');
$routes->post('page/create', 'PageController::save');
