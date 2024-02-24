<?php

namespace Schaefersoft\Base\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Checkbox extends Component
{
    public function __construct(
        public string $name,
        public bool   $disabled = false
    ){}

    public function render(): View
    {
        return view('base::components.checkbox');
    }
}
