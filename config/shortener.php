<?php

return [

    /**
     * The url shortening service to use
     */
    'driver' => env('SHORTENER_DRIVER','bitly'),

    'cache' => [
        /**
         * Whether or not to use Laravels Cache driver
         */
        'enabled' => env('SHORTENER_CACHE_ENABLED',true),

        /**
         * The duration in minutes to remember the url in cache
         */
        'duration' => env('SHORTENER_CACHE_DURATION',1440),
    ],

    /**
     * Bitly settings
     */
    'bitly' => [
        ['token' => env('BITLY_APP_TOKEN_1', env('BITLY_APP_TOKEN'))], // BITLY_APP_TOKEN_1 or BITLY_APP_TOKEN
        ['token' => env('BITLY_APP_TOKEN_2')],
        ['token' => env('BITLY_APP_TOKEN_3')],
        ['token' => env('BITLY_APP_TOKEN_4')],
        ['token' => env('BITLY_APP_TOKEN_5')],
        ['token' => env('BITLY_APP_TOKEN_6')],
        ['token' => env('BITLY_APP_TOKEN_7')],
        ['token' => env('BITLY_APP_TOKEN_8')],
        ['token' => env('BITLY_APP_TOKEN_9')],
    ], 
];
