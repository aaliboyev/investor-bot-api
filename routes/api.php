<?php

use Illuminate\Http\Request;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

/** @var $router Illuminate\Routing\Router */

Route::get('/', function () {
    return 'Hello World';
});

Route::middleware(['auth:sanctum'])->group(function(){

    Route::get('/user', function (Request $request){
        return $request->user();
    });

    // Access for only users who verified email
    Route::middleware(['verified'])->group(function(){

    });
});
