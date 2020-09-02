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
Route::Create('POST', '/cementery/delete', 'admin/deleteCementery');

Route::Create('GET', '/insurances/list', 'admin/getInsurances');
Route::Create('POST', '/insurance/delete', 'admin/deleteInsurance');

Route::Create('GET', '/services/list', 'admin/getServices');
Route::Create('POST', '/service/delete', 'admin/deleteService');

Route::Create('GET', '/providers/list', 'admin/getProviders');
Route::Create('POST', '/provider/delete', 'admin/deleteProvider');

Route::Create('GET', '/contracts/list', 'contracts/list');
Route::Create('POST', '/contracts/list/one', 'contracts/list');
Route::Create('POST', '/contract/add', 'contracts/save');
Route::Create('POST', '/contract/delete', 'contracts/delete');
Route::Create('POST', '/contract/invoice', 'contracts/addInvoice');

// RENDER RESPONSE
echo Route::Read(METHOD, REQUEST, BODY);

