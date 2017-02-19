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
$route['default_controller'] = 'Index_page';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/**
 * Portfólio Routes
 */
$route['portfolio/agencia-web'] = 'Portfolio/page_web_agency';
$route['portfolio/flappy-bird'] = 'Portfolio/page_flappy_bird';
$route['portfolio/framework-php'] = 'Portfolio/page_framework_php';
$route['portfolio/framework-css'] = 'Portfolio/page_framework_css';
$route['portfolio/leobcastro'] = 'Portfolio/page_leobcastro';
$route['portfolio/sistema-de-notas'] = 'Portfolio/page_notes_system';
$route['portfolio/carregador-de-classes'] = 'Portfolio/page_includder';
// ...

/**
 * Blog Routes
 */
$route['blog'] = 'Pages/in_construction';
// ...

/**
 * Simple Routes
 */
$route['questionario'] = 'Pages/in_construction';
$route['curriculo'] = 'Pages/in_construction';
$route['creditos'] = 'Pages/page_credits';
$route['hahaha'] = 'Pages/in_construction';
$route['dashboard-template'] = 'Pages/in_construction';

/**
 * Panel Routes
 */
/** Panel Auth */
$route['dashboard/login'] = 'auth/Login';
$route['login/auth'] = 'auth/Login/show';
$route['logout'] = 'auth/Logout/index';
$route['dashboard/user/register'] = 'auth/AccountRegister';
$route['register/auth'] = 'auth/AccountRegister/store';

/** Panel Index */
$route['dashboard'] = 'panel/Home';
$route['dashboard/(:num)'] = 'panel/Home';

/** Panel Emails */
$route['dashboard/emails'] = 'panel/Show_emails';
$route['dashboard/emails/(:num)'] = 'panel/Show_emails';
$route['dashboard/email/show/(:num)'] = 'panel/Show_emails/show/$1';
$route['dashboard/email/delete/(:num)'] = 'panel/Show_emails/destroy/$1';

/** Panel Messages */
$route['dashboard/messages'] = 'panel/Show_messages';
$route['dashboard/messages/(:num)'] = 'panel/Show_messages';
$route['dashboard/message/show/(:num)'] = 'panel/Show_messages/show/$1';
$route['dashboard/message/delete/(:num)'] = 'panel/Show_messages/destroy/$1';

$route['dashboard/bloqueios'] = 'panel/Blocker';
$route['dashboard/bloqueios/(:num)'] = 'panel/Blocker';
$route['dashboard/bloqueio/store'] = 'panel/Blocker/store';
$route['dashboard/bloqueio/delete/(:num)'] = 'panel/Blocker/destroy/$1';

/** Ajax Requests */
$route['email/store'] = 'Index_page/store_email';
$route['message/store'] = 'Index_page/store_message';
$route['ajax/counters'] = 'panel/Home/counters';
$route['notification/blog'] = 'Notifications/blog_done';
