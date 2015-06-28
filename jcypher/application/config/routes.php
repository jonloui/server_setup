<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "main";
$route['404_override'] = '';

$route['projects'] = "main/projects";
$route['special_thanks'] = "main/special_thanks";
$route['coming_soon'] = "main/coming_soon";

$route['baby_leo'] = "baby_leos/index";

$route['calculator'] = "calculators/index";

$route['cypher'] = "cyphers/index";
$route['jcyphers_api'] = "cyphers/jcyphers_api";

$route['tloui'] = "tlouis/index";
$route['tloui_animations'] = "tlouis/animations";
$route['tloui_fineart'] = "tlouis/fineart";
$route['tloui_resume'] = "tlouis/resume";
$route['tloui_contactinfo'] = "tlouis/contactinfo";

//end of routes.php