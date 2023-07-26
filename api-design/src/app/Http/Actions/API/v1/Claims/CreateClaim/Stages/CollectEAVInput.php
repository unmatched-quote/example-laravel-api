<?php

namespace App\Http\Actions\API\v1\Claims\CreateClaim\Stages;

use Illuminate\Support\Arr;
use App\Http\Actions\API\v1\Claims\CreateClaim\CreateClaimState;

class CollectEAVInput
{
    public function handle(CreateClaimState $state): CreateClaimState
    {
        $input = $state->payload;
        $objects = $state->getEavObjects();

        foreach($objects as $object)
        {
            $identifier = $object['identifier'];

            $data_key = sprintf('eav.%s.data', $identifier);
            $multi_data_key = sprintf('eav.%s.multi_data', $identifier);

            $data = Arr::get($input, $data_key, []);
            $multi_data = Arr::get($input, $multi_data_key, []);

            $state->setEavObjectInput($identifier, $data, $multi_data);
        }

        return $state;
    }
}
