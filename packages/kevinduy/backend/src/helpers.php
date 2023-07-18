<?php

if (! function_exists('backend_path')) {
    function backend_path($path)
    {
        return __DIR__.($path ? DIRECTORY_SEPARATOR.$path : $path);
    }
}
