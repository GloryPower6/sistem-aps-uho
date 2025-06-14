<?php

namespace App\Config;

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setAutoRoute(true);

$routes->get('/', 'Landing::index');


// Grup Filter Login
$routes->group('',['filter' => 'loginfilter'], function ($routes) {
    $routes->get('data/home', 'Data::home');
    $routes->get('data/akreksternal', 'Data::akreksternal');
    $routes->get('data/auditkeuanganeks', 'Data::auditkeuanganeks');
    $routes->get('data/akrinternasional', 'Data::akrinternasional');
    $routes->get('data/mhsasing', 'Data::mhsasing');
    $routes->get('data/sitasiilmiah', 'Data::sitasiilmiah');
    $routes->get('data/prestasimahasiswa', 'Data::prestasimahasiswa');
    $routes->get('data/riwayatakreditasiprodi', 'Data::riwayatakreditasiprodi');
    $routes->get('data/riwayatakreditasi', 'Data::riwayatAkreditasi');
    $routes->get('data/akrprodi', 'Data::akrprodi');
    $routes->get('data/pembelajaranpraktikum', 'Data::pembelajaranpraktikum');
    $routes->get('data/seleksimahasiswabaru', 'Data::seleksiMahasiswaBaru');
    $routes->get('data/produkjasa', 'Data::produkjasa');
    $routes->get('data/kerjasamaperguruantinggi', 'Data::kerjasamaperguruantinggi');
    $routes->get('data/kecukupandosen', 'Data::kecukupandosen');
    $routes->get('data/bebankerjadosen', 'Data::bebankerjadosen');
    $routes->get('data/produktivitaspenelitian', 'Data::produktivitaspenelitian');
    $routes->get('data/produktivitaspenelitianpkm', 'Data::produktivitaspenelitianpkm');
    // $routes->get('data/rekognisidosen', 'Data::rekognisidosen');
 });
 $routes->group('',['filter' => 'AlreadyLoginFilter'], function ($routes) {
     $routes->get('data/login', 'Auth::index');
 });

$routes->get("/riwayatakreditasi/(:any)", "Data::riwayatAkreditasi/$1");
$routes->get('logout', 'Auth::logout');
$routes->get("/riwayatakreditasi/(:any)", "Data::riwayatAkreditasi/$1");

//Tata Pamong Aksi
$routes -> delete("/akreksternal/(:num)", "Data::akreksternal_delete/$1");
$routes-> post ("/akreksternal/(:num)", "Data::akreksternal_update/$1");

$routes -> delete("/auditkeuanganeks/(:num)", "Data::auditkeuanganeks_delete/$1");
$routes-> post ("/auditkeuanganeks/(:num)", "Data::auditkeuanganeks_update/$1");

$routes -> delete("/akrprodi/(:num)", "Data::akrprodi_delete/$1");
$routes-> post ("/akrprodi/(:num)", "Data::akrprodi_update/$1");

$routes -> delete("/kerjasamaperguruantinggi/(:num)", "Data::kerjasamaperguruantinggi_delete/$1");
$routes-> post ("/kerjasamaperguruantinggi/(:num)", "Data::kerjasamaperguruantinggi_update/$1");

$routes -> delete("/akrinternasional/(:num)", "Data::akrinternasional_delete/$1");
$routes-> post ("/akrinternasional/(:num)", "Data::akrinternasional_update/$1");

//Sumber Daya Manusia Aksi
$routes -> delete("/bebankerjadosen/(:num)", "Data::bebankerjadosen_delete/$1");
$routes-> post ("/bebankerjadosen/(:num)", "Data::bebankerjadosen_update/$1");

$routes -> delete("/kecukupandosen/(:num)", "Data::kecukupandosen_delete/$1");
$routes-> post ("/kecukupandosen/(:num)", "Data::kecukupandosen_update/$1");

$routes -> delete("/produktivitaspenelitian/(:num)", "Data::produktivitaspenelitian_delete/$1");
$routes-> post ("/produktivitaspenelitian/(:num)", "Data::produktivitaspenelitian_update/$1");

$routes -> delete("/produktivitaspenelitianpkm/(:num)", "Data::produktivitaspenelitianpkm_delete/$1");
$routes-> post ("/produktivitaspenelitianpkm/(:num)", "Data::produktivitaspenelitianpkm_update/$1");


// Tambah Data
// Tata Pamomg dan Tata Kelola
$routes->post('auditkeuanganeks', 'Data::auditkeuanganeks');
$routes->post('akreksternal', 'Data::akreksternal');
$routes->post('akrinternasional', 'Data::akrinternasional');
$routes->post('akrprodi', 'Data::akrprodi');
$routes->post('kerjasamaperguruantinggi', 'Data::kerjasamaperguruantinggi');

// Mahasiswa
$routes->post('mhsasing', 'Data::mhsasing');
$routes->post('pembelajaranpraktikum', 'Data::pembelajaranpraktikum');

//Sumber Daya Manusia
$routes->post('kecukupandosen', 'Data::kecukupandosen');
$routes->post('bebankerjadosen', 'Data::bebankerjadosen');
$routes->post('produktivitaspenelitian', 'Data::produktivitaspenelitian');
$routes->post('produktivitaspenelitianpkm', 'Data::produktivitaspenelitianpkm');


