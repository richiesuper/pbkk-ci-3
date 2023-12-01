<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// Home Barang
$routes->get('karyawan', 'Barang::index');
// Halaman Tambah
$routes->get('karyawan/tambah', 'Barang::tambah');
// Halaman Edit
$routes->get('karyawan/edit/(:any)', 'Barang::edit/$1');
// Proses CRUD
// Insert
$routes->post('karyawan/add', 'Barang::add');
// Update
$routes->post('karyawan/update', 'Barang::update');
// Hapus
$routes->get('karyawan/hapus/(:any)', 'Barang::hapus/$1');


