<?php

namespace Aymanalhattami\Toolbox\Api\Response;

use Illuminate\Http\JsonResponse;

class InfoResponse extends Response
{
    protected string $message = 'Info';

    protected int $code = 200;

    protected string $type = 'info';
}