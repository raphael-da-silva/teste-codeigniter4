<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// inicio
$routes->get('/', 'Home::index');
$routes->get('/index', 'Home::index');

// rotas de login
$routes->post('/login-access', 'LoginAccess::index');
$routes->get('/logout', 'LoginAccess::logout');

// rotas dos clientes
$routes->get('/clientes', 'ClientsController::index');
$routes->get('/clientes/adicionar',  'ClientsController::new');