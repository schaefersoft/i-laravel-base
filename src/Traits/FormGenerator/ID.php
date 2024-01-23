<?php

namespace Schaefersoft\Base\Traits\FormGenerator;

class ID extends Element
{
    public static function make(string $name = 'Id'): ID
    {
        return new ID($name);
    }
}
