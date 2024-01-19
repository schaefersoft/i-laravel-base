<?php

namespace Schaefersoft\Base\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Select extends Component
{
    public function __construct(
        public string $label = '',
        public string $value = '',
        public string $name = '',
        public bool $required = false,
        public bool $multiple = false,
        public int|bool $size = false,
        public bool $showOnTop = true,
        public string $type = 'form'
    ) {
    }

    public function render(): View
    {
        return view('base::components.select');
    }
}
