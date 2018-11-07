<?php 
return [ 
    'client_id' => env('PAYPAL_CLIENT_ID','AdvLnbeWxPgPcMaYxcdPKvE93QvuDnRDBpzQkZim-aIJx0v0H6UVvE-yJCYT-MG7onNteqQ-wlo67RRX'),
    'secret' => env('PAYPAL_SECRET','EDVwpDG3PFUiAjdMHoNuCAwimUjIv6IhftaPPWHm-G8-XESbqjS9vcMoWnEUjiBtIr4O0FtAg0i8cFzf'),
    'settings' => array(
        'mode' => env('PAYPAL_MODE','sandbox'),
        'http.ConnectionTimeOut' => 30,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path() . '/logs/paypal.log',
        'log.LogLevel' => 'ERROR'
    ),
];

