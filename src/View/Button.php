<?php

namespace Schaefersoft\Base\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    public function __construct(
        public ?string $label = null,
        public ?string $id = null,
        public ?string $class = null,
        public bool $isSubmit = false
    ) {
    }

    public function render(): View
    {
        return view('base::components.button');
    }
}
