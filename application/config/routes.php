<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Frontend Routes
$route['about'] = 'pages/about';
$route['scholarship'] = 'scholarship/index';
$route['scholarship/(:any)'] = 'scholarship/detail/$1';
$route['news'] = 'news/index';
$route['news/(:any)'] = 'news/detail/$1';
$route['gallery'] = 'gallery/index';
$route['contact'] = 'pages/contact';
$route['faq'] = 'pages/faq';

// Authentication Routes
$route['login'] = 'auth/login';
$route['register'] = 'auth/register';
$route['logout'] = 'auth/logout';
$route['forgot-password'] = 'auth/forgot_password';
$route['reset-password/(:any)'] = 'auth/reset_password/$1';

// Dashboard Routes
$route['dashboard'] = 'dashboard/index';
$route['admin'] = 'dashboard/index';
$route['admin/(:any)'] = 'dashboard/$1';
