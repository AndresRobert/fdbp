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

Route::Create('POST', '/cementeries', 'admin/getCementeries');
Route::Create('POST', '/comunes', 'admin/getComunesByRegion');
Route::Create('POST', '/regions', 'admin/getRegions');
Route::Create('POST', '/educations', 'admin/getEducationLevels');
Route::Create('POST', '/insurances', 'admin/getInsurances');
Route::Create('POST', '/maritalstatus', 'admin/getMaritalStatuses');
Route::Create('POST', '/occupations', 'admin/getOccupations');
Route::Create('POST', '/providers', 'admin/getProveedores');
Route::Create('POST', '/services', 'admin/getServices');

Route::Create('POST', '/contracts/save', 'contracts/save');

// RENDER RESPONSE
echo Route::Read(METHOD, REQUEST, BODY);

