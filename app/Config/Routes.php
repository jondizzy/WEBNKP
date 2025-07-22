<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::about');
$routes->get('/ProductCategory', 'Home::ProductCategory');
$routes->get('/client', 'Home::client');
$routes->get('/client/detail/(:segment)', 'Home::clientDetail/$1');