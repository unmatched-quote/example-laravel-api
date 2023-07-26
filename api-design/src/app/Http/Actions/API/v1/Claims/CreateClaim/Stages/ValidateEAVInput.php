<?php

namespace App\Http\Actions\API\v1\Claims\CreateClaim\Stages;

use Illuminate\Support\Arr;
use Buckhill\LibEAV\Accessors\EAVObject;
use App\Http\Actions\API\v1\Claims\CreateClaim\CreateClaimState;

class ValidateEAVInput
{
    public function handle(CreateClaimState $state): CreateClaimState
    {
        $accessor = new EAVObject();

        $errors = [];

        foreach($state->getEavObjects() as $object)
        {
            $result = $accessor->validateInput(
                $state->pdo,
                Arr::get($object, 'identifier'),
                Arr::get($object, 'input.data'),
                Arr::get($object, 'input.multi_data')
            );

            $success = $result[0];

            // @todo implement validation error handling
            if(!$success)
            {
                $errors[] = [
                    'object_identifier' => Arr::get($object, 'identifier'),
                    'errors' => $result[1]
                ];
            }
        }

        return $state;
    }
}
