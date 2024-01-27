<?php

namespace Kevinduy\Backend\Builder\Table;

class Column
{
    protected $name;
    protected $label;

    public function __construct($name, $label)
    {
        $this->name = $name;
        $this->label = $label;
    }
}
