<?php

namespace Schaefersoft\Base\Providers;

use Blade;
use Illuminate\Database\Schema\Blueprint;
use Schaefersoft\Base\Services\TypeScriptGeneratorService;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;
use Schaefersoft\Base\Commands\BaseTypeScriptGeneratorCommand;
use Schaefersoft\Base\Rules\TurnstileRule;
use Schaefersoft\Base\Traits\BlueprintMixin;

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
                __DIR__.'/../../resources/views' => resource_path('views/vendor/base'),
                __DIR__.'/../../config/laravel-base.php' => config_path('laravel-base.php')
            ]);
        }

        //Registering Service
        $this->app->singleton(TypeScriptGeneratorService::class, function($app){
            return new TypeScriptGeneratorService();
        });
        $this->app->bind('Illuminate\Database\Schema\Blueprint', BlueprintMixin::class);


        //Registering Console Commands
        $this->commands([
            BaseTypeScriptGeneratorCommand::class
        ]);

        //Registering Blade Component
        Blade::componentNamespace('Schaefersoft\\Base\\View\\Components', 'base');

        //Views
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'base');

        //Validation Rules
        Validator::extend('turnstile', [TurnstileRule::class, '']);


    }
}
