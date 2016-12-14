<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'facebook'   => [
        'client_id' => '231492797262550',
        'client_secret' => '0275645fdc07e5d84eeffc386e43cb35',
        'redirect' => 'http://localhost:8080/LeThai/Laravel/timviec/facebook/callback',
    ],
    'google'   => [
        'client_id' => '508705234127-gkjtn33qug034in4a2tr26v07j2chbuk.apps.googleusercontent.com',
        'client_secret' => '6RGNXWQLH8Hom83aYbgYl4dE',
        'redirect' => 'http://localhost:8080/LeThai/Laravel/timviec/google/callback',
    ],

];
