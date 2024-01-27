<?php

namespace Kevinduy\Backend\Builder\Layout;

use Illuminate\Contracts\Support\Renderable;

class Column
{
    protected $width = [];
    protected $contents = [];

    public function __construct($content = null, $width = 12)
    {
        $this->width['md'] = $width;
        $this->append($content);
    }

    public function append($content)
    {
        $this->contents[] = $content;

        return $this;
    }

    public function build()
    {
        $output = '<div class="col">';
        $output .= '<div class="col-wrapper">';

        foreach ($this->contents as $content) {
            if ($content instanceof Renderable) {
                $output .= $content->render();
            } else {
                $output .= (string) $content;
            }
        }

        $output .= '</div>';
        $output .= '</div>';

        return $output;
    }
}
