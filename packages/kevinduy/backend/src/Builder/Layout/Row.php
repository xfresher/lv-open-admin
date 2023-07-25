<?php

namespace Kevinduy\Backend\Builder\Layout;

use Illuminate\Contracts\Support\Renderable;

class Row implements Renderable
{
    protected $columns = [];

    public function __construct($content = null)
    {

    }

    public function column($width, $content)
    {
        $width = $width < 1 ? round(12 * $width) : $width;

        $this->addColumn(new Column($content, $width));

        return $this;
    }

    protected function addColumn($column)
    {
        $this->columns[] = $column;
    }

    public function build()
    {
        $output = '<div class="row">';

        foreach ($this->columns as $column) {
            $output .= $column->build();
        }

        $output .= '</div>';

        echo $output;
    }

    public function render()
    {
        ob_start();

        $this->build();

        $contents = ob_get_contents();

        ob_end_clean();

        return $contents;
    }
}
