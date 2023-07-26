<?php

namespace App\Http\Actions\API\v1\Claims\CreateClaim\Stages;

use App\Models\Claim2EavInstance;
use App\Http\Actions\API\v1\Claims\CreateClaim\CreateClaimState;

class CreateJunctionConnections
{
    public function handle(CreateClaimState $state): CreateClaimState
    {
        foreach($state->getEAVInstanceInfo() as $info)
        {
            $model = Claim2EavInstance::create($info);

            $state->addJunction($model);
        }

        return $state;
    }
}
