<?php

namespace Schaefersoft\Base\Traits\Models;

use App\Models\SystemUser;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait CreatedUpdatedByTrait
{
    protected static function boot(): void
    {
        parent::boot();

        static::creating(function ($model) {
            if (!$model->isDirty(config('laravel-base.database.created_by'))) {
                $model->created_by = auth()->user()->id ?? null;
            }
            if (!$model->isDirty(config('laravel-base.database.updated_by'))) {
                $model->updated_by = auth()->user()->id ?? null;
            }
        });

        // updating updated_by when model is updated
        static::updating(function ($model) {
            if (!$model->isDirty(config('laravel-base.database.updated_by'))) {
                $model->updated_by = auth()->user()->id ?? null;
            }
        });
    }


    public function creator() : BelongsTo
    {
        return $this->belongsTo(config('laravel-base.database.created_by_model'), config('laravel-base.database.created_by'));
    }

    public function updater() : BelongsTo
    {
        return $this->belongsTo(config('laravel-base.database.created_by_model'), config('laravel-base.database.updated_by'));
    }

}
