<?php

namespace Kevinduy\Backend\Builder\Layout;

use Illuminate\Contracts\Support\Renderable;

class Content implements Renderable
{
    protected $rows = [];

    public function __construct()
    {

    }

    public function row($content)
    {
        if (is_callable($content)) {
            $row = new Row();
            call_user_func($content, $row);
            $this->addRow($row);
        } else {
            $this->addRow(new Row($content));
        }

        return $this;
    }

    protected function addRow($row)
    {
        $this->rows[] = $row;
    }

    public function build()
    {
        ob_start();

        foreach ($this->rows as $row) {
            $row->build();
        }

        $contents = ob_get_contents();

        ob_end_clean();

        return $contents;
    }

    public function render()
    {
        $compact = [
            '_content_'   => $this->build(),
        ];

        return view('layouts.backend', $compact)->render();
    }
}
