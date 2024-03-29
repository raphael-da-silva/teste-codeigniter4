<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// inicio
$routes->get('/', 'HomeController::index');
$routes->get('/index', 'HomeController::index');

// rotas de login
$routes->post('/login-access', 'LoginAccess::index');
$routes->get('/logout', 'LoginAccess::logout');

// rotas dos clientes
$routes->get('/clientes', 'ClientsController::index');
$routes->get('/clientes/adicionar',  'ClientsController::new');
$routes->get('/clientes/editar/(:num)', 'ClientsController::update/$1');

$routes->post('/submit', 'ClientsController::submit');
$routes->post('/remove', 'ClientsController::remove');