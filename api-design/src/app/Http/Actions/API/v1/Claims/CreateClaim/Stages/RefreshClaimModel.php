<?php

namespace App\Http\Actions\API\v1\Claims\CreateClaim\Stages;

use App\Http\Actions\API\v1\Claims\CreateClaim\CreateClaimState;

class RefreshClaimModel
{
    public function handle(CreateClaimState $state): CreateClaimState
    {
        $state->getClaim()->refresh();

        return $state;
    }
}
