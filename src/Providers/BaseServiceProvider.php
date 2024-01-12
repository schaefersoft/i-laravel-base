<?php

namespace Schaefersoft\Base\Providers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;
use Schaefersoft\Base\Rules\TurnstileRule;

class BaseServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../../config/laravel-base.php', 'laravel-base');
    }

    public function boot(): void
    {
        if($this->app->runningInConsole()){
            $this->publishes([
                __DIR__.'/../../views' => resource_path('views/vendor/base'),
                __DIR__.'/../../config/laravel-base.php' => config_path('laravel-base.php')
            ]);
        }

        //Views
        $this->loadViewsFrom(__DIR__ . '/../../views', 'base');

        //Validation Rules
        Validator::extend('turnstile', [TurnstileRule::class, '']);
    }
}
