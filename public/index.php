<?php

use SecTheater\Http\Route;
use SecTheater\Http\Request;
use SecTheater\Http\Response;


require_once __DIR__ . '/../src/Support/helpers.php';
require_once base_path(). '/vendor/autoload.php';
require_once base_path(). '/routes/web.php';

$route = new Route(new Request , new Response);

$route->resolve();

// var_dump(base_path());
// dump($_SERVER);
// dump(Route::$routes['get']['/']());
// "Sectheater\\PhpMvc\\": "src/" ,
// "Sectheater\\PhpMvc\\App\\": "App/"


