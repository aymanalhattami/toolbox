<?php

namespace AymanAlhattami\Toolbox\Api\Response;

class WarningResponse extends Response
{
    protected string $message = 'Warning';

    protected int $code = 400;

    protected string $type = 'warning';
}
