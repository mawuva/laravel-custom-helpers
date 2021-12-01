<?php

namespace Mawuekom\CustomHelpers;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class DataHelpers
{
    /**
     * @var \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Builder
     */
    protected $model;

    /**
     * @var bool
     */
    protected $inTrashed = false;

    /**
     * Init model or create new model instance
     *
     * @param string    $model
     * @param array     $params
     * @param bool      $inTrashed
     *
     * @return mixed
     */
    public function initModel($model, $params = [], $inTrashed = false)
    {
        $this ->inTrashed = $inTrashed;
        $result = (empty($params)) ? app($model) : app($model) ->where($params);

        $this ->model = ($this ->inTrashed) ? $result ->withTrashed() : $result;

        return $this;
    }

    /**
     * Load data from id
     *
     * @param int|string $id
     *
     * @return mixed
     */
    public function fromId($id)
    {
        $key = ($this ->model instanceof Builder)
                ? resolve_key($this ->model ->getModel(), $id, $this ->inTrashed)
                : resolve_key($this ->model, $id, $this ->inTrashed);

        $this ->model = $this ->model ->where($key, $id);

        return $this;
    }

    /**
     * Get data records
     *
     * @param string|null   $orderBy
     * @param array         $columns
     * @param array         $relations
     *
     * @return mixed
     */
    public function getRecords($orderBy = null, $columns = ['*'], $relations = [])
    {
        if ($orderBy !== null) {
            if (str_starts_with($orderBy, '-')) {
                $column = substr($orderBy, strlen('-')).'';
                $this ->model = $this ->model ->orderBy($column, 'DESC');
            }
            
            else {
                $this ->model = $this ->model ->orderBy($orderBy, 'ASC');
            }
        }

        if (!empty($relations)) {
            $this ->model = $this ->model ->with($relations);
        }

        return $this ->model ->get($columns);
    }

    /**
     * Get data row
     *
     * @param array $columns
     * @param array $relations
     *
     * @return mixed
     */
    public function getDataRow($columns = ['*'], $relations = [])
    {
        if (!empty($relations)) {
            $this ->model = $this ->model ->with($relations);
        }

        return $this ->model ->first($columns);
    }

    /**
     * Resolve model instance to use when create or update data
     *
     * @param string|int    $id
     * @param array         $columns
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function getModelInstance($id = null, $columns = ['*']): Model
    {
        return ($id !== null)
                ? $this ->fromId($id) ->getDataRow($columns)
                : $this ->model;
    }
}
