<?php

namespace Schaefersoft\Base\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DropdownItem extends Component
{
    public function __construct(
        public string $link,
        public ?string $label = null
    ){}

    public function render(): View
    {
        return $this->view('base::components.dropdown-item');
    }
}
