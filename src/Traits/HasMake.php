<?php

namespace Aymanalhattami\Toolbox\Traits;

trait HasMake
{
    public static function make(): static
    {
        return new static();
    }
}