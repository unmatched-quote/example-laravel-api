<?php

namespace App\DTO;

class DynamicObject
{
    public function __construct(
        array $data
    ) {
        foreach ($data as $key => $value) {
            $this->$key = $value;
        }
    }
}
