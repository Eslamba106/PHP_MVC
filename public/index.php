<?php

use SecTheater\Http\Route;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../routes/web.php';

dump($_SERVER);
// dump(Route::$routes['get']['/']());
// "Sectheater\\PhpMvc\\": "src/" ,
// "Sectheater\\PhpMvc\\App\\": "App/"