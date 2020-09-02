<?php

require 'config/Core.php';

use Api\Route;

// ENDPOINTS SETUP
Route::Create('GET', '/home', 'dom/info');
Route::Create('POST', '/register', 'users/register');
Route::Create('POST', '/login', 'users/login');
Route::Create('POST', '/logout', 'users/logout');
Route::Create('POST', '/check', 'users/checkToken');

Route::Create('GET', '/users/list', 'users/getByFilter');

Route::Create('GET', '/regions/list', 'admin/getRegions');
Route::Create('GET', '/comunes/list', 'admin/getComunes');
Route::Create('GET', '/comunes/list/byRegion', 'admin/getComunesByRegion');
Route::Create('GET', '/cementeries/list', 'admin/getCementeries');
Route::Create('GET', '/insurances/list', 'admin/getInsurances');
Route::Create('GET', '/services/list', 'admin/getServices');
Route::Create('GET', '/providers/list', 'admin/getProviders');
Route::Create('GET', '/providers/list/byService', 'admin/getProvidersByService');
Route::Create('GET', '/colors/list/byService', 'admin/getColorsByService');

Route::Create('GET', '/contracts/list', 'contracts/list');
Route::Create('POST', '/contracts/list/one', 'contracts/list');
Route::Create('POST', '/contract/add', 'contracts/save');
Route::Create('POST', '/contract/delete', 'contracts/delete');

// RENDER RESPONSE
echo Route::Read(METHOD, REQUEST, BODY);

