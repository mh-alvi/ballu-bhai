<?php

use App\Services\Route;

Route::add('/', 'HomeController', 'index', 'GET');
Route::add('login', 'LoginController', 'index', 'GET');
Route::add('register', 'RegisterController', 'index', 'GET');