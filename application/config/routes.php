<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['kendaraan/update/(:any)']   = 'KendaraanController/update/$1';
$route['kendaraan/read/(:any)']     = 'KendaraanController/read/$1';
$route['kendaraan/delete/(:any)']   = 'KendaraanController/delete/$1';
$route['kendaraan/create']          = 'KendaraanController/create';
$route['kendaraan']                 = 'KendaraanController';

$route['rental/update/(:any)']  = 'RentalController/update/$1';
$route['rental/read/(:any)']    = 'RentalController/read/$1';
$route['rental/delete/(:any)']  = 'RentalController/delete/$1';
$route['rental/create']         = 'RentalController/create';
$route['rental/report']         = 'RentalController/report';
$route['rental']                = 'RentalController/index';

$route['default_controller']    = 'HomeController';
$route['404_override']          = '';
$route['translate_uri_dashes']  = FALSE;
