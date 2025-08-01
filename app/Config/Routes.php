<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', to: 'Home::index');
// bab 1
$routes->get('/HaloDunia', 'HelloWorld::HaloDunia');
$routes->get('/', 'Home::index');

// bab 2
$routes->get('/HaloDunia', 'HelloWorld::HaloDunia');
$routes->get('/form-praktikum', 'PraktikumController::form');
$routes->post('/submit-praktikum', 'PraktikumController::submit');
$routes->get('/latihan-view', 'HalloWorld::index');

// latihan bab 3
$routes->get('/about', 'WicaksController::about');
// tugas bab 3
$routes->get('/', 'RamdanController::index');
$routes->get('/profil', 'RamdanController::profil');
$routes->get('/skill', 'RamdanController::skill');
// bab 5
$routes->get('/crud', 'Crud::index');
$routes->get('/crud/tambah', 'Crud::tambah');
$routes->post('/crud/simpan', 'Crud::simpan');
$routes->get('/crud/edit/(:segment)', 'Crud::edit/$1');
$routes->post('/crud/update/(:segment)', 'Crud::update/$1');
$routes->get('/crud/delete/(:segment)', 'Crud::delete/$1');
// bab 6
$routes->get('/toko', 'Toko::index');
$routes->get('/toko/tambah', 'Toko::tambah');
$routes->post('/toko/simpan', 'Toko::simpan');
$routes->get('/toko/edit/(:segment)', 'Toko::edit/$1');
$routes->post('/toko/update/(:segment)', 'Toko::update/$1');
$routes->get('/toko/delete/(:segment)', 'Toko::delete/$1');





