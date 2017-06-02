<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['vykonane/(:any)'] = 'vykonane/view/$1';
$route['vykonane'] = 'vykonane/index';
$route['zamestnanci/(:any)'] = 'zamestnanci/view/$1';
$route['zamestnanci'] = 'zamestnanci/index';
$route['ponuka/(:any)'] = 'ponuka/view/$1';
$route['ponuka'] = 'ponuka/index';
$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
