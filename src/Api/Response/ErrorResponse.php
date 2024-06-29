<?php

namespace Aymanalhattami\Toolbox\Api\Response;

use Illuminate\Http\JsonResponse;

class ErrorResponse extends Response
{
    private string $message = 'Error';

    private int $code = 500;

    private string $type = 'error';
}