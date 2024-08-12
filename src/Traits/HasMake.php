<?php

namespace Aymanalhattami\Toolbox\Traits;

trait HasMake
{
    public function __construct() {}

    public static function make(): static
    {
        return new static();
    }
}