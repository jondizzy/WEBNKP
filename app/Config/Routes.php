<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//Home
$routes->get('/', 'Home::index');
$routes->get('/aboutUs', 'Home::about');
$routes->get('/ProductCategory', 'ProductController::show_produk');
$routes->get('/client', 'Home::client');
$routes->get('/news', 'NewsController::index');
$routes->get('newsdetail/(:num)', 'NewsController::detail/$1');
$routes->get('/contact', 'Home::Contact');
$routes->get('/client/detail/(:segment)', 'Home::clientDetail/$1');

//Admin
$routes->get('/login', 'AdminController::loginForm');
$routes->post('/admin/login', 'AdminController::loginProcess');
$routes->get('/admin/dashboard', 'AdminController::dashboard');

//Produk
$routes->get('/admin/AdminProduct', 'ProductController::ProductView');
$routes->get('admin/add_product', 'ProductController::add_product_form');
$routes->post('admin/add-product', 'ProductController::addproduct');
$routes->get('admin/edit_product/(:num)', 'ProductController::editproduct/$1');
$routes->post('admin/updateproduct/(:num)', 'ProductController::updateproduct/$1');
$routes->get('admin/delete_product/(:num)', 'ProductController::deleteproduct/$1');


//News
//ROUTES BAGIAN NEWS
$routes->get('/admin/AdminNews', 'AdminController::news');
$routes->get('admin/add_news', 'AdminController::add_news_form');
$routes->post('admin/add-news', 'AdminController::addNews');
$routes->get('admin/edit_news/(:num)', 'AdminController::editNews/$1');
$routes->post('admin/update_news/(:num)', 'AdminController::updateNews/$1');
$routes->get('admin/delete_news/(:num)', 'AdminController::deleteNews/$1');

//ROUTES BAGIAN CATEGORY
$routes->get('/admin/AdminCategory', 'AdminController::category');
$routes->get('admin/add_category', 'AdminController::add_category_form');
$routes->post('admin/add-category', 'AdminController::addCategory');
$routes->get('admin/edit_category/(:num)', 'AdminController::editCategory/$1');
$routes->post('admin/update_category/(:num)', 'AdminController::updateCategory/$1');
$routes->get('admin/delete_category/(:num)', 'AdminController::deleteCategory/$1');

$routes->get('/logout', 'AdminController::logout');
