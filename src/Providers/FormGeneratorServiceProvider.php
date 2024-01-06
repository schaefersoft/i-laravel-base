<?php

namespace Schaefersoft\Base\Providers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Schaefersoft\Base\View\FormGenerator;

class FormGeneratorServiceProvider extends ServiceProvider
{
    public function register(): void
    {

    }

    public function boot(): void
    {
        Request::macro('validateFromFormGenerator', function (string $model){
            $fields = $model::$formGeneratorFields;
            $validateFields = [];

            foreach($fields as $field){
                $validateFields[$field['name']] = $field['validations'];
            }

            return $this->validate($validateFields);
        });

        Blade::component('form-generator', FormGenerator::class );
    }
}
