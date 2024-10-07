<?php

use App\Middleware\{Auth, Guest};
use App\Services\Route;

Route::get('/', 'HomeController', 'index');

Route::get('/login', 'LoginController', 'index', [Guest::class]);
Route::post('/submit-login', 'LoginController', 'login', [Guest::class]);

Route::get('/register', 'RegisterController', 'index', [Guest::class]);
Route::post('/submit-register', 'RegisterController', 'register', [Guest::class]);

Route::get('/dashboard', 'DashboardController', 'index', [Auth::class]);

Route::get('/logout', 'DashboardController', 'logout', [Auth::class]);
