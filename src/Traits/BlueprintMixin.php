<?php

namespace Schaefersoft\Base\Traits;

use Illuminate\Database\Schema\Blueprint;

class BlueprintMixin extends Blueprint
{
    public function addCreatedAndUpdatedBy(): void
    {
        $this->foreignId(config('laravel-base.database.created_by'))->nullable();
        $this->foreignId(config('laravel-base.database.updated_by'))->nullable();

        $this->foreign(config('laravel-base.database.created_by'))
            ->references(config('laravel-base.database.created_by_reference'))
            ->on(config('laravel-base.database.created_by_reference_table'));
        $this->foreign(config('laravel-base.database.updated_by'))
            ->references(config('laravel-base.database.created_by_reference'))
            ->on(config('laravel-base.database.created_by_reference_table'));

    }
}
