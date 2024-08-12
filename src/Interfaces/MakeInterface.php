<?php

namespace Aymanalhattami\Toolbox\Interfaces;

interface MakeInterface
{
    public function __construct();

    public static function make(): static;
}