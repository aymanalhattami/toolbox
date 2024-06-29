<?php

namespace Aymanalhattami\Toolbox\Api\Response;

use Illuminate\Http\JsonResponse;

class WarningResponse extends Response
{
    private string $message = 'Warning';

    private int $code = 400;

    private string $type = 'warning';
}