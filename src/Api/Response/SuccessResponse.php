<?php

namespace Aymanalhattami\Toolbox\Api\Response;

class SuccessResponse extends Response
{
    protected string $message = 'Success';

    protected int $code = 200;

    protected string $type = 'success';

}