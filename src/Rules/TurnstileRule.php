<?php

namespace Schaefersoft\Base\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Http;
use Schaefersoft\Base\Exceptions\ConfigNotFoundException;
use Schaefersoft\Base\Exceptions\TurnstileRequestException;

class TurnstileRule implements ValidationRule
{
    protected ?string $url = 'https://challenges.cloudflare.com/turnstile/v0/siteverify';

    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $turnstileResponse = is_null($value)
            ? request()->get('cf-turnstile-response')
            : $value;

        if (! $secret = config('laravel-base.security.turnstile.secret_key')) {
            throw new ConfigNotFoundException('Turnstile secret key is not defined.');
        }

        $response = Http::asJson()
            ->timeout(30)
            ->connectTimeout(10)
            ->throw(
                fn () => new TurnstileRequestException(
                    'An unkown error occured, please refresh the page and try again.'
                )
            )
            ->post($this->url, [
                'secret' => $secret,
                'response' => $turnstileResponse,
            ]);

        if(is_array($response->json())){
            $check = $response->json();
        } else {
            $check = [
                'success' => false,
                'message' => 'Unknow error occured, please try again',
            ];
        }

        if(!$check['success']){
            $fail(__(config('laravel-base.security.turnstile.error_message_translation_key')));
        }
    }
}
