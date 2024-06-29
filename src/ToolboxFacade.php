<?php

namespace Aymanalhattami\Toolbox;

use Illuminate\Support\Facades\Facade;

class ToolboxFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'toolbox';
    }
}
