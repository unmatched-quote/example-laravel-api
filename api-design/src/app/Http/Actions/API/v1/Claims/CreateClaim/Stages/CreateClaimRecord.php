<?php

namespace App\Http\Actions\API\v1\Claims\CreateClaim\Stages;

use App\Models\Claim;
use App\Http\Actions\API\v1\Claims\CreateClaim\CreateClaimState;

class CreateClaimRecord
{
    public function handle(CreateClaimState $state): CreateClaimState
    {
        $model = Claim::create($state->getClaimData());

        $state->setClaim($model);

        return $state;
    }
}
