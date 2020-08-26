<?php

require 'config/Core.php';

use Api\Route;

// ENDPOINTS SETUP
Route::Create('GET', '/home', 'dom/info');
Route::Create('POST', '/register', 'users/register');
Route::Create('POST', '/login', 'users/login');
Route::Create('POST', '/logout', 'users/logout');
Route::Create('POST', '/check', 'users/checkToken');

Route::Create('POST', '/users', 'users/getByFilter');

Route::Create('POST', '/list/regions', 'admin/getRegions');
Route::Create('POST', '/list/comunes', 'admin/getComunes');
Route::Create('POST', '/list/comunesByRegion', 'admin/getComunesByRegion');
Route::Create('POST', '/list/cementeries', 'admin/getCementeries');
Route::Create('POST', '/list/insurances', 'admin/getInsurances');
Route::Create('POST', '/list/services', 'admin/getServices');
Route::Create('POST', '/list/providers', 'admin/getProviders');
Route::Create('POST', '/list/providersByService', 'admin/getProvidersByService');
Route::Create('POST', '/list/colorsByService', 'admin/getColorsByService');

Route::Create('POST', '/contract', 'contracts/save');
Route::Create('GET', '/contract', 'contracts/list');

// RENDER RESPONSE
echo Route::Read(METHOD, REQUEST, BODY);

