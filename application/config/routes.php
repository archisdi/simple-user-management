<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['login']['GET'] = 'auth/login';
$route['logout']['POST'] = 'auth/logout';
$route['profile']['GET'] = 'auth/profile';

$route['users']['GET'] = 'user/all';
$route['users/create']['GET'] = 'user/create';
$route['users/save']['POST'] = 'user/save';

$route['(.*)'] = "none";
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
