<?php

namespace App\Http\Actions\API\v1\Claims\CreateClaim\Stages;

use App\Models\ClaimRevision;
use App\Http\Actions\API\v1\Claims\CreateClaim\CreateClaimState;

class CreateClaimRevisionRecord
{
    public function handle(CreateClaimState $state): CreateClaimState
    {
        $model = ClaimRevision::create($state->getClaimRevisionData());

        $state->setClaimRevision($model);

        return $state;
    }
}
