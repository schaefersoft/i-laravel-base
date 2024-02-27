<?php

namespace Schaefersoft\Base\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Schaefersoft\Base\Classes\MetaData;

class Meta extends Component
{
    public function __construct(
        public MetaData $meta
    ) {}

    public function render(): View
    {
        return view('base::components.meta');
    }
}
