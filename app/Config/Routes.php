<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/index', 'Home::index');

$routes->post('/login-access', 'LoginAccess::index');
$routes->get('/logout', 'LoginAccess::logout');

$routes->get('/clientes', 'ClientsController::index');