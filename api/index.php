<?php

require 'config/Core.php';

use Api\Route;

// ENDPOINTS SETUP
Route::Create('GET', '/home', 'dom/info');
Route::Create('POST', '/register', 'users/register');
Route::Create('POST', '/login', 'users/login');
Route::Create('POST', '/logout', 'users/logout');
Route::Create('POST', '/check', 'users/checkToken');

Route::Create('GET', '/users', 'users/getByFilter');

Route::Create('GET', '/list/regions', 'admin/getRegions');
Route::Create('GET', '/list/comunes', 'admin/getComunes');
Route::Create('GET', '/list/comunesByRegion', 'admin/getComunesByRegion');
Route::Create('GET', '/list/cementeries', 'admin/getCementeries');
Route::Create('GET', '/list/insurances', 'admin/getInsurances');
Route::Create('GET', '/list/services', 'admin/getServices');
Route::Create('GET', '/list/providers', 'admin/getProviders');
Route::Create('GET', '/list/providersByService', 'admin/getProvidersByService');
Route::Create('GET', '/list/colorsByService', 'admin/getColorsByService');

Route::Create('POST', '/contract', 'contracts/save');
Route::Create('GET', '/contract', 'contracts/list');
Route::Create('POST', '/contract/one', 'contracts/list');

// RENDER RESPONSE
echo Route::Read(METHOD, REQUEST, BODY);

