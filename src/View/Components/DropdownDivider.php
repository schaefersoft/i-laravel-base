<?php

namespace Schaefersoft\Base\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DropdownDivider extends Component
{
    public function render(): View
    {
        return $this->view('base::components.dropdown-divider');
    }
}
