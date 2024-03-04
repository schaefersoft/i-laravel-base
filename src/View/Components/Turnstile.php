<?php

namespace Schaefersoft\Base\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Turnstile extends Component
{
    public function __construct(
    ) {
    }

    public function render(): View
    {
        return view('base::components.turnstile');
    }
}
