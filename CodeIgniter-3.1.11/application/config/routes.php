<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['pusatlapor/(:any)'] = 'pusatlapor/laporan/$1';
$route['pusatlapor'] = 'pusatlapor/index';
$route['default_controller'] = 'home/view';
$route['(:any)'] = 'home/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
