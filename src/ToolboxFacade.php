<?php

namespace Aymanalhattami\Toolbox;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Aymanalhattami\Toolbox\Skeleton\SkeletonClass
 */
class ToolboxFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'toolbox';
    }
}
