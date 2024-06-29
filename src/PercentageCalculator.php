<?php

namespace Aymanalhattami\Toolbox;

use Aymanalhattami\Toolbox\Traits\HasMake;

class PercentageCalculator
{
    use HasMake;

    private int|float|null $percentage;

    private int|float $amount;

    private int|float $result;

    private function getPercentage(): float|int
    {
        return $this->percentage;
    }

    public function percentage(float|int $percentage): static
    {
        $this->percentage = $percentage;

        return $this;
    }

    public function getAmount(): float|int
    {
        return $this->amount;
    }

    public function amount(float|int $amount): static
    {
        $this->amount = $amount;

        return $this;
    }

    public function getResult(): float|int
    {
        return $this->result;
    }

    public function calculate(): static
    {
        $this->result = ($this->getAmount() / 100) * $this->getPercentage();

        return $this;
    }
}