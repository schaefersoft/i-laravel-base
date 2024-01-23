<?php

namespace Schaefersoft\Base\Traits\FormGenerator;

class Text extends Element
{
    public static function make(string $name): Text
    {
        return new Text($name);
    }
}
