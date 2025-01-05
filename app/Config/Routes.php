<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setAutoRoute('true');

$routes->add('test', 'Home::test');
$routes->add('/', 'Home::index');

//User
$routes->add('user', 'UserController::index');
$routes->add('user/delete/(:any)', 'UserController::delete/$1');
$routes->add('user/(:any)', 'UserController::show/$1');
$routes->get('user/create', 'UserController::createview');
$routes->post('user/create', 'UserController::store');
$routes->get('user/(:any)/edit', 'UserController::edit/$1');
$routes->post('user/(:any)/edit', 'UserController::save/$1');


//page
$routes->get('page', 'PageController::index');

$routes->get('page/create', 'PageController::create');
$routes->post('page/store', 'PageController::store');

$routes->get('page/edit/(:any)', 'PageController::edit/$1');
$routes->post('page/save/(:any)', 'PageController::save/$1');

$routes->get('page/delete/(:any)', 'PageController::delete/$1');

$routes->get('page/(:any)', 'PageController::show/$1');


//components
$routes->get('components/explorer', 'ComponentController::explorer');
$routes->get('components/usercount', 'ComponentController::UserCount');
$routes->get('components/texteditor', 'ComponentController::texteditor');
$routes->get('components/add', 'ComponentController::add');





//categories
$routes->get('categories', 'CategoryController::index');
$routes->get('categories/add', 'CategoryController::add');
$routes->post('categories/store', 'CategoryController::store');
$routes->get('categories/edit/(:any)', 'CategoryController::edit/$1');
$routes->post('categories/save', 'CategoryController::save');
$routes->get('categories/remove/(:any)', 'CategoryController::remove/$1');
$routes->get('categories/reset', 'CategoryController::reset');

//ads
$routes->get('ads', 'AdsController::index');
$routes->get('ads/add', 'AdsController::add');
$routes->post('ads/store', 'AdsController::store');
$routes->get('ads/edit/(:any)', 'AdsController::edit/$1');
$routes->post('ads/save', 'AdsController::save');
$routes->get('ads/remove/(:any)', 'AdsController::remove/$1');
$routes->get('ads/show/(:any)', 'AdsController::show/$1');

