<?php


namespace brnysn\LaravelH5P\Repositories\Criteria\Primitives;

use brnysn\LaravelH5P\Repositories\Criteria\Criterion;
use Illuminate\Database\Eloquent\Builder;

class EqualCriterion extends Criterion
{
    public function apply(Builder $query): Builder
    {
        return $query->where($this->key, $this->value);
    }
}