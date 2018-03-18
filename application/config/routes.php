<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['mobil/update/(:any)']   = 'MobilController/update/$1';
$route['mobil/read/(:any)']     = 'MobilController/read/$1';
$route['mobil/delete/(:any)']   = 'MobilController/delete/$1';
$route['mobil/create']          = 'MobilController/create';
$route['mobil']                 = 'MobilController';

$route['rental/update/(:any)']  = 'RentalController/update/$1';
$route['rental/read/(:any)']    = 'RentalController/read/$1';
$route['rental/delete/(:any)']  = 'RentalController/delete/$1';
$route['rental/create']         = 'RentalController/create';
$route['rental/report']         = 'RentalController/report';
$route['rental']                = 'RentalController/index';

$route['default_controller']    = 'HomeController';
$route['404_override']          = '';
$route['translate_uri_dashes']  = FALSE;
