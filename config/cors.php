<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Allowed Origins
    |--------------------------------------------------------------------------
    |
    | The origins that are allowed to access your application.
    |
    */
    'paths' => ['clientes/*'],

    'origins' => ['*'], // Permite todos los orígenes

    /*
    |--------------------------------------------------------------------------
    | Allowed Methods
    |--------------------------------------------------------------------------
    |
    | The methods that are allowed to access your application.
    |
    */

    'methods' => ['GET', 'POST', 'PUT', 'DELETE', 'OPTIONS'],

    /*
    |--------------------------------------------------------------------------
    | Allowed Headers
    |--------------------------------------------------------------------------
    |
    | The headers that are allowed to be accessed on the request.
    |
    */

    'allowedHeaders' => ['Content-Type', 'Authorization', 'X-Requested-With','Access-Control-Allow-Origin'],

    /*
    |--------------------------------------------------------------------------
    | Exposed Headers
    |--------------------------------------------------------------------------
    |
    | The headers that are allowed to be exposed on the response.
    |
    */

    'exposedHeaders' => [],

    /*
    |--------------------------------------------------------------------------
    | Max Age
    |--------------------------------------------------------------------------
    |
    | The number of seconds the browser should cache preflight response.
    |
    */

    'maxAge' => 0,

    /*
    |--------------------------------------------------------------------------
    | Credentials
    |--------------------------------------------------------------------------
    |
    | Whether you want to allow credentials in the request or not.
    |
    */

    'credentials' => false,
];