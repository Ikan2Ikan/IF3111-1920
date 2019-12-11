<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['detail/(:any)'] = 'detail/vdetail/$1';


$route['default_controller'] = 'utama';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
