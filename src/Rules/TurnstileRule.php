<?php

namespace Schaefersoft\Base\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Http;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;
use Schaefersoft\Base\Exceptions\ConfigNotFoundException;
use Schaefersoft\Base\Exceptions\TurnstileRequestException;

class TurnstileRule implements ValidationRule
{
    protected ?string $url = 'https://challenges.cloudflare.com/turnstile/v0/siteverify';

    /**
     * @throws ContainerExceptionInterface
     * @throws ConfigNotFoundException
     * @throws NotFoundExceptionInterface
     */
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
                    'An unknown error occurred, please refresh the page and try again.'
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
                'message' => 'Unknown error occurred, please try again',
            ];
        }
        if(!$check['success']){
            $fail(__(config('laravel-base.security.turnstile.error_message_translation_key')));
        }
    }
}
