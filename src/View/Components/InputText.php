<?php

namespace Schaefersoft\Base\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputText extends Component
{
    public function __construct(
        public string $label,
        public string $name,
        public ?string $value = null,
        public ?string $placeholder = null,
        public ?string $type = 'text',
        public bool $required = false,
        public bool $autofocus = false,
        public string $autocomplete = '',
        public bool $disabled = false,
        public ?string $accept = null,
    ) {
    }

    public function render(): View
    {
        return view('base::components.input-text');
    }
}
