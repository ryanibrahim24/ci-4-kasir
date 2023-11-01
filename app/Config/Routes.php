<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'UserController::index');

$routes->get('/coba', 'Home::coba');
$routes->get('/users/create', 'UserController::create');
$routes->get('users', 'UserController::index');
$routes->post('users', 'UserController::save');
$routes->get('/users/edit/(:segment)', 'UserController::edit/$1');
$routes->post('/users/update/(:segment)', 'UserController::update/$1');
$routes->delete('/users/(:num)', 'UserController::delete/$1');

$routes->get('/items/create', 'ItemController::create');
$routes->get('items', 'ItemController::index');
$routes->post('items', 'ItemController::save');
$routes->get('/items/edit/(:segment)', 'ItemController::edit/$1');
$routes->post('/items/update/(:segment)', 'ItemController::update/$1');
$routes->delete('/items/(:num)', 'ItemController::delete/$1');
$routes->get('/items/(:segment)', 'ItemController::detail/$1');

$routes->get('/orders/create', 'OrderController::create');
$routes->get('orders', 'OrderController::index');
$routes->post('orders', 'OrderController::save');
$routes->delete('/orders/(:num)', 'OrderController::delete/$1');
