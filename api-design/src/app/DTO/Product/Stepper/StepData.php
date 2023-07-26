<?php

namespace App\DTO\Product\Stepper;

class StepData
{
    public function __construct(
        public readonly string|null $icon,
        public readonly int $step,
        public readonly string $title,
        public readonly bool $complete,
        public string $componentName,
        array $errors = [],
        array $datasets = [],
    )
    {}
}
