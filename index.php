<?php

require "vendor/autoload.php";


// $f3=require('vendor/bcosca/fatfree/lib/base.php');
$f3 = \Base::instance();

$f3->set('DEBUG',1);

if ((float)PCRE_VERSION<7.9)
	trigger_error('PCRE version is out of date');

$f3->set('AUTOLOAD', 'backend/');

// Load configuration
$f3->config('config.ini');
// $config = $f3->get('config');

$f3->config('routes.ini');

// $f3->route('GET /', function($f3) {
//     $template = new Template();
//     echo $template->render('public/index.html');
// });

$f3->route('GET /','Main->index');


$f3->run();
