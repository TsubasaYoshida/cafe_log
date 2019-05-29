<?php
defined('BASEPATH') or exit('No direct script access allowed');

// shop RESTful
$route['shops']['get'] = 'shops/index';
$route['shops/(:num)']['get'] = 'shops/show/$1';
$route['shops/new']['get'] = 'shops/new';
$route['shops']['post'] = 'shops/create';
$route['shops/(:num)/edit']['get'] = 'shops/edit/$1';
$route['shops/(:num)']['patch'] = 'shops/update/$1';
$route['shops/(:num)']['delete'] = 'shops/delete/$1';


$route['(:any)'] = 'pages/view/$1';


$route['default_controller'] = 'shops/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;