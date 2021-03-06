<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

$route['api/add_user']['POST']='users/add_user';



$route['api/set_news']['POST']='news/set_news_api';
$route['api/update_news/(:num)']['POST']='news/update_news_api/$1';
$route['api/get_all_news']['GET']='news/get_all_news_api';
$route['api/get_news_by_user']['GET']='news/get_news_by_user';
$route['login_view']='LoginRegister/login_view';
$route['register_view']='LoginRegister/register_view';
$route['login']='LoginRegister/login';
$route['register']='LoginRegister/register';
$route['logout']='LoginRegister/logout';
$route['news/create'] = 'news/create';
$route['news/update/(:num)'] = 'news/update_view/$1';
$route['news/delete/(:num)']='news/delete/$1';
$route['news']='/news/index';
$route['news/(:any)']='/news/view/$1';
$route['(:any.*)'] = 'pages/view/$1';
$route['default_controller'] = 'pages/view';