<?php

return [
    /*
    |--------------------------------------------------------------------------
    | merchantID
    |--------------------------------------------------------------------------
    */
    'merchantID' => env('ZARINPAL_MERCHANT_ID','XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX'),
    /*
    |--------------------------------------------------------------------------
    | driver
    |--------------------------------------------------------------------------
    */
    'driver' => 'Rest',
    /*
    |--------------------------------------------------------------------------
    | URL
    |--------------------------------------------------------------------------
    */
    'start_pay_address' =>  env('ZARINPAL_START_PAY_ADDRESS', 'https://www.zarinpal.com/pg/StartPay/'),
    'wsdl_address'      =>  env('ZARINPAL_WSDL_ADDRESS', 'https://www.zarinpal.com/pg/services/WebGate/wsdl'),
    'rest_base_url'     =>  env('ZARINPAL_REST_BASE_URL', 'https://www.zarinpal.com/pg/rest/WebGate/'),
    'callback_url'      =>  env('ZARINPAL_CALLBACK_URL', 'YOUR-CALLBACK-URL'),
];
