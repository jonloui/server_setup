<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "users";
$route['404_override'] = '';

$route['books'] = "books/index";
$route['books/(:num)'] = "books/book_review/$1";
$route['users/(:num)'] = "users/user_review/$1";

//end of routes.php