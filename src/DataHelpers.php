<?php

namespace Mawuekom\CustomHelpers;

class DataHelpers
{
    /**
     * Build query to get entity data by field value or not
     *
     * @param string $model
     * @param array $field
     * @param bool $inTrashed
     *
     * @return \Illuminate\Database\Eloquent\Builder|Illuminate\Database\Eloquent\Model
     */
    public function buildQueryToGetEntityData($model, $params = [], $inTrashed = false)
    {
        $data = (empty($params)) ? app($model) : app($model) ->where($params);

        return ($inTrashed)
                    ? $data ->withTrashed()
                    : $data;
    }
}
