<?php

namespace Schaefersoft\Base\View;

use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;
use Illuminate\View\Component;

class FormGenerator extends Component
{
    private array $fields = [];
    public function __construct(
        public string $route,
        public string $model,
        public ?Model $currentModel = null,
        public string $method = 'post',
        public string $submitButtonLabel = 'Änderungen speichern',
    ){
        $this->fields = $model::$formGeneratorFields;
    }

    public function render(): View
    {
        return view('base::form-generator.'. config('laravel-base.form-generator.view'), [
            'fields' => $this->fields
        ]);
    }
}
