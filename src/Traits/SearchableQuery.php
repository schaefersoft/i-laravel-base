<?php

namespace Schaefersoft\Base\Traits;

use Illuminate\Database\Eloquent\Builder;

trait SearchableQuery
{
    public function scopeSearchable(Builder $query, ?string $searchText = null,  array $toSearchArray = []): Builder
    {
        if($searchText === null){
            return $query;
        }

        foreach($toSearchArray as $search){
            $query->orWhere($search, 'LIKE', '%'.$searchText.'%');
        }

        return $query;
    }
}
