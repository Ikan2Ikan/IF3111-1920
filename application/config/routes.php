<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'control';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['search'] = 'control/search';
$route['detail/(:num)'] = 'control/tampilan_detail/$1';