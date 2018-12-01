<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'main';

$route['login']['GET'] = 'auth/login';
$route['sign_user']['POST'] = 'auth/sign_user';
$route['logout']['POST'] = 'auth/logout';
$route['profile']['GET'] = 'auth/profile';

$route['users']['GET'] = 'user/all';
$route['users/create']['GET'] = 'user/create';
$route['users/save']['POST'] = 'user/save';

$route['(.*)'] = "none";
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
