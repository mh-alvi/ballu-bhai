<?php

use App\Services\Route;

Route::add('/', 'HomeController', 'index', 'GET');
Route::add('login', 'LoginController', 'index', 'GET');
Route::add('submit-login', 'LoginController', 'login', 'POST');
Route::add('register', 'RegisterController', 'index', 'GET');