<?php

namespace Aymanalhattami\Toolbox\Api\Response;

use Illuminate\Http\JsonResponse;

class ErrorResponse extends Response
{
    protected string $message = 'Error';

    protected int $code = 500;

    protected string $type = 'error';

    public function getErrors(): array
    {
        return $this->data;
    }

    public function errors(array $errors): self
    {
        $this->data = $errors;

        return $this;
    }
}