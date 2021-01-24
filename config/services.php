<?php

return [

  /*
  |--------------------------------------------------------------------------
  | Third Party Services
  |--------------------------------------------------------------------------
  |
  | This file is for storing the credentials for third party services such
  | as Stripe, Mailgun, SparkPost and others. This file provides a sane
  | default location for this type of information, allowing packages
  | to have a conventional place to find your various credentials.
  |
  */

  'google' => [
    'client_id' => env('GOOGLE_CLIENT_ID'),
    'client_secret' => env('GOOGLE_CLIENT_SECRET'),
    'redirect' => env('GOOGLE_REDIRECT'),
  ],

  'github' => [
    'client_id' => env('GITHUB_CLIENT_ID'),
    'client_secret' => env('GITHUB_CLIENT_SECRET'),
    'redirect' => env('GITHUB_REDIRECT'),
  ],

  'stripe' => [
    'model' => App\Model\User::class,
    'key' => env('STRIPE_KEY'),
    'secret' => env('STRIPE_SECRET'),
    'webhook' => [
      'secret' => env('STRIPE_WEBHOOK_SECRET'),
      'tolerance' => env('STRIPE_WEBHOOK_TOLERANCE', 300),
    ],
  ],

];
