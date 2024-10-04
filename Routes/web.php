<?php

use App\Services\Route;

Route::get('/', 'HomeController', 'index');
Route::get('login', 'LoginController', 'index');
Route::post('submit-login', 'LoginController', 'login');
Route::post('submit-register', 'RegisterController', 'register');
Route::get('logout', 'DashboardController', 'logout');
Route::get('dashboard', 'DashboardController', 'index');
Route::get('register', 'RegisterController', 'index');