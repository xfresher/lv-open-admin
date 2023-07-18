<?php

namespace Kevinduy\Backend\Facades;

use Illuminate\Support\Facades\Facade;

class Backend extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Kevinduy\Backend\Backend::class;
    }
}
