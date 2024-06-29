<?php

namespace Aymanalhattami\Toolbox\Api\Response;

use Aymanalhattami\Toolbox\Traits\HasMake;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\JsonResource;

class Response
{
    use HasMake;

    private array|JsonResource $data = [];

    private array $additionalData = [];

    private string $message = 'Response message';

    private int $code = 200;

    private string $type = 'response';

    public function type(string $type): static
    {
        $this->type = $type;

        return $this;
    }

    private function getType(): string
    {
        return $this->type;
    }

    private function getAdditionalData(): array
    {
        return $this->additionalData;
    }

    public function additionalData(array $additionalData): static
    {
        $this->additionalData = $additionalData;

        return $this;
    }

    public function getData(): array|JsonResource
    {
        if ($this->data instanceof JsonResource) {
            if (is_null($this->data->resource)) {
                return ['data' => null];
            }

            return ['data' => $this->data];
        }

        return $this->data;
    }

    public function data(array|JsonResource $data): self
    {
        $this->data = $data;

        return $this;
    }

    private function getMessage(): string
    {
        return __($this->message);
    }

    public function message(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    private function getCode(): int
    {
        return $this->code;
    }

    public function code(int $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function send(): JsonResponse
    {
        return response()->json([
            'success' => true,
            'type' => $this->getType(),
            'message' => $this->getMessage(),
            ...$this->getData(),
            ...$this->getAdditionalData(),
        ], $this->getCode());
    }
}