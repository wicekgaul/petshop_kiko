<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->setAutoRoute(true);
$routes->get('/', 'Home::index');

$routes->get('/obat', 'Obat::index');

$routes->group('Pemilik', static function ($routes) {
    $routes->get('', 'Pemilik::index');
    $routes->get('tambah', 'Pemilik::tambah');
    $routes->post('save', 'Pemilik::simpan');
    $routes->get('ubah/(:hash)', 'Pemilik::ubah/$1');
    $routes->post('update', 'Pemilik::update');
    $routes->get('delete/(:hash)', 'Pemilik::delete/$1');
});
$routes->group('Dokter', static function ($routes) {
    $routes->get('', 'Dokter::index');
    $routes->get('tambah', 'Dokter::tambah');
    $routes->post('save', 'Dokter::simpan');
    $routes->get('ubah/(:hash)', 'Dokter::ubah/$1');
    $routes->post('update', 'Dokter::update');
    $routes->get('delete/(:hash)', 'Dokter::delete/$1');
});
$routes->group('Obat', static function ($routes) {
    $routes->get('', 'Obat::index');
    $routes->get('tambah', 'Obat::tambah');
    $routes->post('save', 'Obat::simpan');
    $routes->get('ubah/(:hash)', 'Obat::ubah/$1');
    $routes->post('update', 'Obat::update');
    $routes->get('delete/(:hash)', 'Obat::delete/$1');
});
