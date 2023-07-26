<?php

namespace App\DTO\Product\Stepper;

/**
 * @generator-depends-on App\DTO\Product\Stepper\StepData
 */
class StepMetadata
{
    /** @var array<StepData>  */
    public readonly array $steps;

    public function __construct(
        public readonly string $title,
        public readonly int $errorCount,
        array $steps
    )
    {
        $this->steps = array_map(fn(array $step) => new StepData(...$step), $steps);
    }
}
