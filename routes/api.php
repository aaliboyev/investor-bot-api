<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

/** @var $router Illuminate\Routing\Router */

Route::get('/', function () {
    return 'Hello World';
});
