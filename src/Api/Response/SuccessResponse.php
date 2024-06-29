<?php

namespace Aymanalhattami\Toolbox\Api\Response;

class SuccessResponse extends Response
{
    private string $message = 'Success';

    private int $code = 200;

    private string $type = 'success';

}