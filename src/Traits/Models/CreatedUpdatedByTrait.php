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
            if (!$model->isDirty('created_by')) {
                $model->created_by = auth()->user()->id;
            }
            if (!$model->isDirty('updated_by')) {
                $model->updated_by = auth()->user()->id;
            }
        });

        // updating updated_by when model is updated
        static::updating(function ($model) {
            if (!$model->isDirty('updated_by')) {
                $model->updated_by = auth()->user()->id;
            }
        });
    }


    public function created_by() : BelongsTo
    {
        return $this->belongsTo(SystemUser::class, 'created_by');
    }

    public function updated_by() : BelongsTo
    {
        return $this->belongsTo(SystemUser::class, 'updated_by');
    }

}
