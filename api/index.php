<?php

require 'config/Core.php';

use Api\Route;

// ENDPOINTS SETUP
Route::Create('GET', '/home', 'dom/info');
Route::Create('POST', '/register', 'users/register');
Route::Create('POST', '/login', 'users/login');
Route::Create('POST', '/logout', 'users/logout');
Route::Create('POST', '/check', 'users/checkToken');

Route::Create('POST', '/users/list', 'users/getByFilter');

Route::Create('POST', '/regions/list', 'admin/getRegions');
Route::Create('POST', '/comunes/list', 'admin/getComunes');
Route::Create('POST', '/comunes/list/byRegion', 'admin/getComunesByRegion');

Route::Create('POST', '/cementeries/list', 'admin/getCementeries');
Route::Create('POST', '/cementery/add', 'admin/saveCementery');
Route::Create('POST', '/cementery/delete', 'admin/deleteCementery');

Route::Create('POST', '/insurances/list', 'admin/getInsurances');
Route::Create('POST', '/insurance/add', 'admin/saveInsurance');
Route::Create('POST', '/insurance/delete', 'admin/deleteInsurance');

Route::Create('POST', '/services/list', 'admin/getServices');
Route::Create('POST', '/service/add', 'admin/saveService');
Route::Create('POST', '/service/delete', 'admin/deleteService');

Route::Create('POST', '/providers/list', 'admin/getProviders');
Route::Create('POST', '/provider/add', 'admin/saveProvider');
Route::Create('POST', '/provider/delete', 'admin/deleteProvider');

Route::Create('POST', '/contracts/list', 'contracts/list');
Route::Create('POST', '/contracts/list/one', 'contracts/list');
Route::Create('POST', '/contract/add', 'contracts/save');
Route::Create('POST', '/contract/delete', 'contracts/delete');
Route::Create('POST', '/contract/invoice', 'contracts/addInvoice');
Route::Create('POST', '/contract/payment', 'contracts/togglePayment');
Route::Create('POST', '/contract/byEmail', 'contracts/sendByEmail');

// RENDER RESPONSE
echo Route::Read(METHOD, REQUEST, BODY);

