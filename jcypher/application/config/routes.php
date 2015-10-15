<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "main";
$route['404_override'] = '';

$route['projects'] = "main/projects";
$route['special_thanks'] = "main/special_thanks";
$route['coming_soon'] = "main/coming_soon";

$route['baby_leo'] = "baby_leos/index";

$route['bookmark'] = "bookmarks/index";
$route['bookmark/create/(:num)'] = "bookmarks/create/$1";

$route['calculator'] = "calculators/index";

$route['cypher'] = "cyphers/index";
$route['jcyphers_api'] = "cyphers/jcyphers_api";

$route['session/create'] = "sessions/create";
$route['session/delete'] = "sessions/destroy";

$route['tloui'] = "tlouis/index";
$route['tloui_animations'] = "tlouis/animations";
$route['tloui_fineart'] = "tlouis/fineart";
$route['tloui_resume'] = "tlouis/resume";
$route['tloui_contactinfo'] = "tlouis/contactinfo";

$route['user'] = "users/index";
$route['user/create'] = "users/create";
$route['user/profile/(:num)'] = "users/show/$1";

$route['zesty'] = "zestys/index";
$route['zesty/trialist'] = "zestys/trialist";
$route['zesty/trialist/trial1'] = "zestys/trialist_trial1";
$route['zesty/trialist/trialist_trial1b'] = "zestys/trialist_trial1b";
$route['zesty/trainer'] = "zestys/trainer";
$route['zesty/trainer/trainer_trial1'] = "zestys/trainer_trial1";
//end of routes.php