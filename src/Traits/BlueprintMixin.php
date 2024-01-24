<?php

namespace Schaefersoft\Base\Traits;

use Illuminate\Database\Schema\Blueprint;

class BlueprintMixin extends Blueprint
{
    public function addCreatedAndUpdatedBy(string $foreignTable = 'system_users')
    {
        $this->foreignId('created_by')->nullable();
        $this->foreignId('updated_by')->nullable();

        $this->foreign('created_by')->references('id')->on($foreignTable);
        $this->foreign('updated_by')->references('id')->on($foreignTable);

    }
}
