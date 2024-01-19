<?php

namespace Schaefersoft\Base\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Form extends Component
{
    public function __construct(
        public string $action,
        public string $method = 'post',
        public bool $isWithFile = false,
        public ?string $id = null,
        public ?string $class = null,
    ) {
    }

    public function render(): View
    {
        return view('base::components.form');
    }
}
