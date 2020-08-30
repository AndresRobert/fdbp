<?php

require_once 'ErrorHandler.php';

// DIRECTORIES
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', $_SERVER['DOCUMENT_ROOT'].DS);
define('API', ROOT.'api'.DS);
    define('CFG', API.'config'.DS);
        define('CORE', CFG.'Core.php');
        define('ROUTER', CFG.'Router.php');
        define('STATUS', CFG.'Status.php');
    define('MDL', API.'models'.DS);
        define('MODEL', MDL.'Model.php');
    define('RSP', API.'responses'.DS);
        define('RESPONSE', RSP.'Response.php');
    define('KIT', API.'kits'.DS);
        define('AUTH', KIT.'Auth.php');
        define('CLIENT', KIT.'Client.php');
        define('COOKIE', KIT.'Cookie.php');
        define('DBASE', KIT.'Database.php');
        define('FILE', KIT.'File.php');
        define('JSQL', KIT.'Jsql.php');
        define('SESSION', KIT.'Session.php');
        define('TEXT', KIT.'Text.php');
        define('TOOLBOX', KIT.'Toolbox.php');
    define('LOGS', API.'logs'.DS);
    define('SRC', API.'src'.DS);
        define('IMG', SRC.'img'.DS);
    define('TMP', API.'tmp'.DS);
define('VENDOR', ROOT.'vendor'.DS);
    define('AUTOLOAD', VENDOR.'autoload.php');

// GLOBALS
define('ALLOWED_IMG_EXTENSIONS', ['jpeg', 'jpg', 'png']);
define('HTACCESS_FOLDER', '/api');
define('ABOUT', ['about' => ['framework' => 'Phasil v0.1.0', 'website' => 'https://phasil.acode.cl', 'contact' => 'contact@acode.cl']]);
define('APPNAME', 'FDBP Manager');

// ROUTES
// GET, POST, PUT, PATCH, DELETE, COPY, HEAD, OPTIONS, LINK, UNLINK, PURGE, LOCK, UNLOCK, PROPFIND, VIEW
define('ALLOWED_METHODS', ['POST', 'GET']);
define('METHOD', strtoupper($_SERVER['REQUEST_METHOD']));
define('REQUEST', $_SERVER['REQUEST_URI']);
define('HEADERS', getallheaders());
$body = $_GET;
try {
    $body = json_decode(file_get_contents('php://input', 'r'), true, 512, JSON_THROW_ON_ERROR) || ['fail'];
} catch (Exception $e) {
    if (!strcasecmp(METHOD, 'POST')) {
        $body = $_POST;
    } else {
        $body = $_GET;
    }
}
define('BODY', $body);

// DATABASE
define('DB_HOST', 'localhost');
define('DB_NAME', 'arcodepr_funeraria');
define('DB_USERNAME', 'arcodepr_funeraria');
define('DB_PASSWORD', 'Funeraria.12345');
define('DB_TABLE_PREFIX', '');
define('JSQL_FOLDER', 'jsql');

// JWT
// You must change this JWT_SECRET for your project
define('JWT_SECRET', 'fUnerArI46auUFzEd2mv9KyznwtLgaBXgoUUAMJvSXGN4uvy3OjnBUDbgT-gh27fl3AmDS2SdnVZ5KnHcWrWFrd8C13RXIbso4tDg1BVOEVgTZnUxIdiDm0csn--HRqEG-xbB8RZokBZeHTq53Uh0TkuUSPeb_tkfuhmYttIHZU');
define('JWT_ISSUER', 'FDBP');
define('JWT_AUDIENCE', 'WEBAPI');
define('JWT_NOT_BEFORE', 0); // in seconds
define('JWT_EXPIRE', 3600); // in seconds

// USES
require_once ROUTER;
require_once MODEL;
require_once RESPONSE;
require_once AUTH;
require_once CLIENT;
require_once COOKIE;
require_once DBASE;
require_once FILE;
require_once SESSION;
require_once TEXT;
require_once TOOLBOX;
require_once AUTOLOAD;

// JSQL Folder
\Kits\File::Folder(JSQL_FOLDER);

// HEADERS
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: ".implode(',', ALLOWED_METHODS));
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// Status routes
\Api\Route::Clear();