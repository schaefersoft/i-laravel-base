<?php

namespace Schaefersoft\Base\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Cropper extends Component
{
    public function __construct(
        public string $name,
        public string $uploadFolderPath,
        public array $oldImages = [],
        public bool $isSingle = true,
        public bool $actionRemoveOld = true,
        public ?string $aspectRatio = '4/3',
        public ?string $actionType = null,
        public ?string $actionTarget = null,
        public ?string $actionModel = null,
        public ?int $actionModelId = null,
        public ?string $actionModelRelation = null,
    ) {
    }

    public function render(): View
    {
        return view('base::components.cropper');
    }
}
