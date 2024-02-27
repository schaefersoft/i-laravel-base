<?php

namespace Schaefersoft\Base\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Meta extends Component
{
    public function __construct(
        public string $title,
        public ?string $description = null,
        public ?string $keywords = null,
    ) {
    }

    public function render(): View
    {
        return view('base::components.meta');
    }
}
