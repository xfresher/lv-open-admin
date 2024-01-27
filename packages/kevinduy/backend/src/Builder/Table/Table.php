<?php

namespace Kevinduy\Backend\Builder\Table;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Traits\Macroable;

class Table
{
    use Macroable {
            __call as macroCall;
        }

    protected $model;
    protected $columns;
    protected $rows;

    public function __construct(Model $model)
    {
        $this->model = $model;
        $this->columns = Collection::make();
        $this->rows = Collection::make();
    }

    public function column($name, $label)
    {
        return $this->__call($name, array_filter([$label]));
    }

    public function columns()
    {
        return $this->columns;
    }

    public function addColumn($column, $label)
    {
        $column = new Column($column, $label);

        return tap($column, function ($value) {
            $this->columns->push($value);
        });
    }

    public function __call($method, $arguments)
    {
        if (static::hasMacro($method)) {
            return $this->macroCall($method, $arguments);
        }

        $label = $arguments[0] ?? null;

        return $this->addColumn($method, $label);
    }
}
