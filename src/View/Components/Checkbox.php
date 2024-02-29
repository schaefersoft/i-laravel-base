<?php

namespace Schaefersoft\Base\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Checkbox extends Component
{
    public function __construct(
        public string $name,
        public string $id,
        public string $value = 'on',
        public bool   $disabled = false,
        public bool $checked = false
    ){}

    public function render(): View
    {
        return view('base::components.checkbox');
    }
}
