<?php


return [
    //Auth Nodule
    'auth' => [
        'enabled' => false,
        'model' => App\Models\SystemUser::class,
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
    ],
    //Database Config
    'database' => [
        //field names
        'created_by' => env('BASE_DATABASE_CREATED_BY_FIELD', 'created_by'),
        'updated_by' => env('BASE_DATABASE_UPDATED_BY_FIELD', 'updated_by'),
        'created_by_reference' => env('BASE_DATABASE_CREATED_BY_REFERENCE', 'id'),
        'updated_by_reference' => env('BASE_DATABASE_UPDATED_BY_REFERENCE', 'id'),
        'created_by_reference_table' => env('BASE_DATABASE_CREATED_BY_REFERENCE_TABLE', 'system_users'),
        'updated_by_reference_table' => env('BASE_DATABASE_UPDATED_BY_REFERENCE_TABLE', 'system_users'),
        'created_by_model' => env('BASE_DATABASE_CREATED_BY_MODEL', \App\Models\SystemUser::class),
        'updated_by_model' => env('BASE_DATABASE_UPDATED_BY_MODEL', \App\Models\SystemUser::class),
    ]
];
