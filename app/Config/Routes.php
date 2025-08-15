<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/aboutUs', 'Home::about');
$routes->get('/ProductCategory', 'Home::ProductCategory');
$routes->get('/client', 'Home::client');
$routes->get('/news', 'NewsController::index');
$routes->get('newsdetail/(:num)', 'NewsController::detail/$1');
$routes->get('/contact', 'Home::Contact');
$routes->get('/client/detail/(:segment)', 'Home::clientDetail/$1');
$routes->get('/login', 'AdminController::loginForm');
$routes->post('/admin/login', 'AdminController::loginProcess');
$routes->get('/admin/dashboard', 'AdminController::dashboard');

$routes->get('admin/add_product', 'ProductController::add_product_form');
$routes->post('admin/add-product', 'ProductController::addproduct');

$routes->get('/admin/AdminNews', 'AdminController::news');
$routes->get('admin/add_news', 'AdminController::add_news_form');
$routes->post('admin/add-news', 'AdminController::addNews');

$routes->get('admin/edit_news/(:num)', 'AdminController::editNews/$1');
$routes->post('admin/update_news/(:num)', 'AdminController::updateNews/$1');

$routes->get('admin/delete_news/(:num)', 'AdminController::deleteNews/$1');

$routes->get('/logout', 'AdminController::logout');
