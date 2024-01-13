# Cloudflare Turnstile

This package has a ready to use Cloudflare Turnstile **backend** implementation included. To use it, follow the
following steps.

## Usage

The Turnstile validation is available by default since it is always included when needed.

## Getting started

To use Cloudflare turnstile, you need to have an [account at cloudflare](https://dash.cloudflare.com). Visit the
dashboard and create a new Turnstile application. Copy the `SITE_KEY` and `SECRET_KEY`
and provide them to the **`.env`**. Here are
some [Cloudflare Turnstile keys for testing](https://developers.cloudflare.com/turnstile/reference/testing/) since you
shouldn't use your production keys for development

````dotenv
BASE_SECURITY_TURNSTILE_SITE_KEY="1x00000000000000000000AA"
BASE_SECURITY_TURNSTILE_SECRET_KEY="1x0000000000000000000000000000000AA"
````

If you are using vite as your frontend bundler, you can add the following property to your **`.env`** to export
your `SITE_KEY` to your vite app. **PLEASE BE CAREFUL HERE TO ONLY PREFIX THE PROPERTIES WITH VITE_ , THAT YOU REALLY
NEED IN YOUR FRONTEND.** [See here](https://vitejs.dev/guide/env-and-mode#env-files)

````dotenv
VITE_BASE_SECURITY_TURNSTILE_SITE_KEY="${BASE_SECURITY_TURNSTILE_SITE_KEY}"
````

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

The package provides an easy way to change to validation message for failed checks. To change the message, add
a `turnstile` property to your `lang\{xx}\validation.php`

#### **`lang\de\validation.php`**

````php

return [
    //Some validation...
    
    
    'turnstile' => 'CAPTCHA thinks you are a robot, please refresh the page.'
];
````

