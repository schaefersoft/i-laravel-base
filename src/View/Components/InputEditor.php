<?php

namespace Schaefersoft\Base\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputEditor extends Component
{
    public function __construct(
        public string $label,
        public string $name,
        public ?string $value = null,
        public string $editor = 'tinymce', // 'textarea'
        public string $id = '',
    ) {
    }

    public function render(): View
    {
        return view('base::components.input-editor');
    }
}
