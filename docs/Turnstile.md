# Cloudflare Turnstile

This package has a ready to use Cloudflare Turnstile **backend** implementation included. To use it, follow the following steps.

## Installation

```bash
composer require schaefersoft/laravel-base
```

## Usage
The Turnstile validation is available by default since it is always included when needed.

## Validation
To validate requests, provide the parameter and use `new TurnstileRule()` from `Schaefersoft\Base\Rules\TurnstileRule`.

````php
use Illuminate\Http\Request;
use Schaefersoft\Base\Rules\TurnstileRule;

public function handleRequest(Request $request)
{
    $request->validate([
        'cf_token' => ['required', new TurnstileRule()]
    ]);
    
    //... execute further code ...
}
````

Alternatively there is an alias `turnstile` available. This alias does the same validation as `new TurnstileRule()`
````php
use Illuminate\Http\Request;

public function handleRequest(Request $request)
{
    $request->validate([
        'cf_token' => ['required', 'turnstile']
    ]);
    
    //... execute further code ...
}

````

## Configuring validation fail messages

The package provides an easy way to change to validation message for failed checks. To change the message, add a `turnstile` property to your `lang\{xx}\validation.php`

#### **`lang\de\validation.php`**
````php

return [
    //Some validation...
    
    
    'turnstile' => 'CAPTCHA thinks you are a robot, please refresh the page.'
];
````

