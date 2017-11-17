<?php

namespace Magein\renderdata\library\render;

use Magein\renderdata\library\RenderClassAbstract;

class CharRenderClass extends RenderClassAbstract
{
    /**
     * @return string
     */
    protected function render()
    {
        $value = $this->value;

        if (is_string($value)) {
            return $value;
        }

        return $value;
    }
}