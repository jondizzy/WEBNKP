<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::about');
$routes->get('/ProductCategory', 'Home::ProductCategory');
$routes->get('/client', 'Home::client');
$routes->get('/news', 'Home::News');
$routes->get('/newsdetail', 'Home::newsdetail');
$routes->get('/contact', 'Home::Contact');
$routes->get('/client/detail/(:segment)', 'Home::clientDetail/$1');
$routes->get('/login', 'AdminController::loginForm');
$routes->post('/admin/login', 'AdminController::loginProcess');
$routes->get('/admin/dashboard', 'AdminController::dashboard');
$routes->get('/logout', 'AdminController::logout');
$routes->get('/productdetail', 'ProductController::productdetail');