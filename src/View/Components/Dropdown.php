<?php

namespace Schaefersoft\Base\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Dropdown extends Component
{
    public function __construct(
        public string $buttonContent = '',
        public string $content = ''
    ){}

    public function render(): View
    {
        return $this->view('base::components.dropdown');
    }
}
