<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->setAutoRoute(true);
$routes->get('/', 'Home::index');

$routes->get('/dokter', 'Dokter::index');
$routes->get('/dokter/tambah', 'Dokter::tambah');

$routes->get('/obat', 'Obat::index');

$routes->group('Pemilik', static function ($routes) {
    $routes->get('', 'Pemilik::index');
    $routes->get('tambah', 'Pemilik::tambah');
    $routes->post('save', 'Pemilik::simpan');
    $routes->get('ubah/(:hash)', 'Pemilik::ubah/$1');
    $routes->post('update', 'Pemilik::update');
    $routes->get('delete/(:hash)', 'Pemilik::delete/$1');
});
