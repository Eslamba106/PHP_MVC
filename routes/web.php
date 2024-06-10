<?php

use SecTheater\Http\Route;
use App\Controllers\HomeController;




// Route::get('/' , [HomeController::class , 'index']);
Route::get('/' , function(){
    return 'EslamX';
});