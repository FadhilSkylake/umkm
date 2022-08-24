<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
//Routes Login
$routes->get('/login', 'Login::index');
$routes->post('/login', 'Login::cobaLogin');

$routes->get('/umkm', 'Umkm::index');
$routes->get('/pendaftaran', 'Pendaftaran::index');
$routes->post('/pendaftaran/save', 'Pendaftaran::save');

$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/kelola', 'Kelola::index');
$routes->post('/kelola/update/(:segment)', 'Kelola::update/$1');

$routes->get('/daftar', 'Daftar::index');
$routes->get('/daftar/edit/(:segment)', 'Daftar::edit/$1');
$routes->post('/daftar/update/(:segment)', 'Daftar::update/$1');
$routes->delete('/daftar/(:num)', 'Daftar::delete/$1');
$routes->get('/daftar/(:any)', 'Daftar::detail/$1');

$routes->get('/kegiatan', 'Kegiatan::index');
$routes->get('/kegiatan/create', 'Kegiatan::create');
$routes->delete('/kegiatan/(:num)', 'Kegiatan::delete/$1');
$routes->get('/kegiatan/edit/(:segment)', 'Kegiatan::edit/$1');
$routes->post('/kegiatan/update/(:segment)', 'Kegiatan::update/$1');
$routes->post('/kegiatan/save', 'Kegiatan::save');
$routes->get('/kegiatan/(:any)', 'Kegiatan::detail/$1');



/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
