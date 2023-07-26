<?php

namespace App\DTO\Product\Stepper;

/**
 * @generator-depends-on App\DTO\Product\Stepper\StepMetadata
 */
class Step
{
    /** @var array<StepMetadata>  */
    public readonly array $data;

    public function __construct(
        public readonly string $title,
        array $values
    )
    {
        $this->data = array_map(fn(array $item) => new StepMetadata(...$item), $values);
    }
}
