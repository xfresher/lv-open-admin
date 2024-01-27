<?php

namespace Kevinduy\Backend\Controllers;

use Kevinduy\Backend\Builder\Layout\Content;

class UserController extends BackendController
{
    public function index(Content $content)
    {
        $output = $content
            ->row(function ($row) {
                $row->column(4, 'Col4-1')
                    ->column(8, 'Col8-1');
            })->row(function ($row) {
                $row->column(4, 'Col4-2')
                    ->column(8, 'Col8-2');
            });

        // dd($output);

        return $output;
    }

    public function grid()
    {

    }

    public function detail()
    {

    }

    public function form()
    {

    }
}
