<?php


return [
    //Auth Nodule
    'auth' => [
        'enabled' => false,
        'model' => App\Models\User::class,
    ],
    //Form Generator Module
    'form-generator' => [
        'view' => 'default'
    ],
    //Security Module
    'security' => [
        'recaptchaV2' => [
            'site' => env('BASE_SECURITY_RECAPTCHA_V2_SITE_KEY'),
            'secret' => env('BASE_SECURITY_RECAPTCHA_V2_SITE_KEY'),
        ]
    ]
];
