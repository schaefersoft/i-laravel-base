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
            'secret' => env('BASE_SECURITY_RECAPTCHA_V2_SECRET_KEY'),
        ],
        'turnstile' => [
            'version' => 'v0',
            'site_key' => env('BASE_SECURITY_TURNSTILE_SITE_KEY'),
            'secret_key' => env('BASE_SECURITY_TURNSTILE_SECRET_KEY'),
            'error_message_translation_key' => 'validation.turnstile'
        ]
    ]
];
