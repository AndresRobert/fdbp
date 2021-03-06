<?php

error_reporting( E_ERROR | E_COMPILE_ERROR | E_WARNING);
ini_set('display_errors', 0);

function json_error($severity, $message, $file, $line)
{
    if ( !( error_reporting() & $severity ) ) {
        return;
    }
    http_response_code(500);
    header('Content-Type: application/json; charset=utf-8');
    $response = array_combine(['errno', 'errstr', 'errfile', 'errline', 'errcontext'], func_get_args());
    die(json_encode(['status' => 'error', 'response' => $response], JSON_THROW_ON_ERROR));
}
set_error_handler('json_error');

function json_fatal()
{
    $last_error = error_get_last();
    if ( error_reporting() & $last_error['type'] ) {
        json_error(...$last_error);
    }
}
register_shutdown_function( 'json_fatal' );