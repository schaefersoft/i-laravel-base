<?php

namespace Schaefersoft\Base\Traits;

use Illuminate\Database\Eloquent\Builder;

trait SearchableQuery
{
    public function scopeSearchable(Builder $query, string $searchText,  array $toSearchArray = []): Builder
    {
        foreach($toSearchArray as $search){
            $query->orWhere($search, 'LIKE', '%'.$searchText.'%');
        }

        return $query;
    }
}
