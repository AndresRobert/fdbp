<?php

require 'config/Core.php';

use Api\Route;

// ENDPOINTS SETUP
Route::Create('GET', '/home', 'dom/info');
Route::Create('POST', '/register', 'users/register');
Route::Create('POST', '/login', 'users/login');
Route::Create('POST', '/logout', 'users/logout');
Route::Create('POST', '/check', 'users/checkToken');

Route::Create('POST', '/users/listAll', 'users/getByFilter');

Route::Create('POST', '/contracts/save', 'contracts/save');

// RENDER RESPONSE
echo Route::Read(METHOD, REQUEST, BODY);

