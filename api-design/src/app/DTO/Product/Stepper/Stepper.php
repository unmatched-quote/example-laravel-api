<?php

/**
 * This DTO relates to products_stepper_storage.stepper column value, it describes JSON inside it, not the db row/record
 */
namespace App\DTO\Product\Stepper;

/**
 * @generator-depends-on App\DTO\Product\Stepper\Step
 */
class Stepper
{
    /** @var array<Step>  */
    public readonly array $product_stepper;

    public function __construct(
        public readonly string              $title,
        public readonly string              $renderingComponent,
        public readonly string             $target_price,
        public readonly ?bool               $quoteNetDownActive,
        array                               $product_stepper
    )
    {
        $items = [];

        foreach($product_stepper as $key => $data)
        {
            $items[] = new Step($key, $data);
        }

        $this->product_stepper = $items;
    }
}
