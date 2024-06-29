<?php

namespace Aymanalhattami\Toolbox\Api\Response;

use Illuminate\Http\JsonResponse;

class WarningResponse extends Response
{
    protected string $message = 'Warning';

    protected int $code = 400;

    protected string $type = 'warning';
}