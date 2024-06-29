<?php

namespace Aymanalhattami\Toolbox\Api\Response;

use Illuminate\Http\JsonResponse;

class InfoResponse extends Response
{
    private string $message = 'Info';

    private int $code = 200;

    private string $type = 'info';
}